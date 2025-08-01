<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProductStatsOverview extends StatsOverviewWidget
{
    // protected static string $view = 'filament.resources.product-resource.widgets.product-stats-overview';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', Product::count())
                ->description('All products in your store')
                ->icon('heroicon-o-shopping-bag')
                ->color('info'),
            Stat::make('Total Categories', ProductCategory::count())
                ->description('All product categories')
                ->icon('heroicon-o-squares-2x2')
                ->color('success'),
            Stat::make('Total Tags', ProductTag::count())
                ->description('Total product tags')
                ->icon('heroicon-o-tag')
                ->color('warning'),
        ];
    }
}
