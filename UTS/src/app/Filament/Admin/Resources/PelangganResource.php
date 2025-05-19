<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PelangganResource\Pages;
use App\Filament\Admin\Resources\PelangganResource\RelationManagers;
use App\Models\Pelanggan;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PelangganResource extends Resource
{
    protected static ?string $model = Pelanggan::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Pelanggan';

    protected static ?string $slug = 'pelanggan';
    // Define the navigation group
    protected static ?string $navigationGroup = 'Perusahaan';
    protected static ?int $navigationSort = 1;
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Data Pelanggan')
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('no_hp')
                            ->tel()
                            ->maxLength(20),
                        Forms\Components\Textarea::make('alamat')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('plat_nomor')
                            ->maxLength(15),
                        Forms\Components\TextInput::make('nomor_antrian')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(10),
                        Forms\Components\Textarea::make('keluhan')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Data Kendaraan')
                    ->schema([
                        Forms\Components\TextInput::make('kendaraan.nama_kendaraan')
                            ->label('Nama Kendaraan')
                            ->maxLength(255),
                        Forms\Components\Select::make('kendaraan.status')
                            ->label('Status')
                            ->options([
                                'menunggu' => 'Menunggu',
                                'proses' => 'Sedang Proses',
                                'selesai' => 'Selesai'
                            ])
                            ->default('menunggu')
                            ->required()
                    ])
                    ->columns(2)
                    ->collapsible()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_antrian')
                    ->label('No. Antrian')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('primary'),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_hp')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('plat_nomor')
                    ->label('Plat Nomor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kendaraan.nama_kendaraan')
                    ->label('Kendaraan')
                    ->searchable()
                    ->default('-'),
                Tables\Columns\BadgeColumn::make('kendaraan.status')
                    ->label('Status')
                    ->colors([
                        'warning' => 'menunggu',
                        'primary' => 'proses',
                        'success' => 'selesai'
                    ])
                    ->default('Belum ada kendaraan'),
                Tables\Columns\TextColumn::make('servis_count')
                    ->label('Jumlah Servis')
                    ->counts('servis')
                    ->badge()
                    ->color('info'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Daftar')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPelanggans::route('/'),
            'create' => Pages\CreatePelanggan::route('/create'),
            'edit' => Pages\EditPelanggan::route('/{record}/edit'),
        ];
    }
    public static function canViewAny(): bool
    {
        return auth()->user()->hasRole(['admin', 'mekanik']);
    }

    public static function canCreate(): bool
    {
        return auth()->user()->hasRole('admin');
    }

    public static function canEdit(Model $record): bool
    {
        return auth()->user()->hasRole('admin');
    }

    public static function canDelete(Model $record): bool
    {
        return auth()->user()->hasRole('admin');
    }
}