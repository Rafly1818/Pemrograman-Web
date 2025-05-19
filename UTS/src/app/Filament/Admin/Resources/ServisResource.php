<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ServisResource\Pages;
use App\Filament\Admin\Resources\ServisResource\RelationManagers;
use App\Models\Servis;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServisResource extends Resource
{
    protected static ?string $model = Servis::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?string $navigationLabel = 'Servis';

    protected static ?string $slug = 'servis';
    // Define the navigation group
    protected static ?string $navigationGroup = 'Perusahaan';
    protected static ?int $navigationSort = 1;
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('pelanggan_id')
                    ->label('Pelanggan')
                    ->relationship('pelanggan', 'nama')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('nama')
                            ->required(),
                        Forms\Components\TextInput::make('no_hp'),
                        Forms\Components\Textarea::make('alamat'),
                        Forms\Components\TextInput::make('plat_nomor'),
                        Forms\Components\TextInput::make('nomor_antrian')
                            ->required()
                            ->unique(),
                        Forms\Components\Textarea::make('keluhan'),
                    ]),
                Forms\Components\Textarea::make('kerusakan')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DatePicker::make('estimasi_selesai')
                    ->label('Estimasi Selesai'),
                Forms\Components\TextInput::make('biaya')
                    ->numeric()
                    ->prefix('Rp')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pelanggan.nomor_antrian')
                    ->label('No. Antrian')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('primary'),
                Tables\Columns\TextColumn::make('pelanggan.nama')
                    ->label('Nama Pelanggan')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('pelanggan.no_hp')
                    ->label('No. HP')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('pelanggan.plat_nomor')
                    ->label('Plat Nomor')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pelanggan.kendaraan.nama_kendaraan')
                    ->label('Kendaraan')
                    ->searchable()
                    ->default('-'),
                Tables\Columns\TextColumn::make('kerusakan')
                    ->limit(50)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= 50) {
                            return null;
                        }
                        return $state;
                    }),
                Tables\Columns\TextColumn::make('estimasi_selesai')
                    ->label('Estimasi Selesai')
                    ->date('d/m/Y')
                    ->sortable()
                    ->color(function ($record) {
                        if (!$record->estimasi_selesai) return null;
                        $today = now()->startOfDay();
                        $estimasi = $record->estimasi_selesai->startOfDay();
                        
                        if ($estimasi->lt($today)) {
                            return 'danger'; // Terlambat
                        } elseif ($estimasi->eq($today)) {
                            return 'warning'; // Hari ini
                        } else {
                            return 'success'; // Masih ada waktu
                        }
                    }),
                Tables\Columns\TextColumn::make('biaya')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Servis')
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
            'index' => Pages\ListServis::route('/'),
            'create' => Pages\CreateServis::route('/create'),
            'edit' => Pages\EditServis::route('/{record}/edit'),
        ];
    }
    public static function canViewAny(): bool
    {
        return auth()->user()->hasRole(['admin', 'mekanik', 'pelanggan']);
    }

    public static function canCreate(): bool
    {
        return auth()->user()->hasRole(['admin', 'mekanik']);
    }

    public static function canEdit(Model $record): bool
    {
        return auth()->user()->hasRole(['admin', 'mekanik']);
    }

    public static function canDelete(Model $record): bool
    {
        return auth()->user()->hasRole(['admin', 'mekanik']);
    }
}