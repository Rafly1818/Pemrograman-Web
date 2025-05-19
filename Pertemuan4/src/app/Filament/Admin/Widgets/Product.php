<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Product as ModelsProduct;

class Product extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Product', ModelsProduct::count())
                ->label('Total Product')
                ->icon('heroicon-o-shopping-bag')
                ->chart([10, 4, 10, 3, 15, 4, 17])
                ->color('danger')
                ->description('Total Product'),
        ];
    }
}
