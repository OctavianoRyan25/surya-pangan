<?php

namespace App\Filament\Pages;

use App\Models\Post;
use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
// use Filament\Widgets\Widget;

class AllStatsOverview extends StatsOverviewWidget
{
    // protected static string $view = 'filament.resources.product-resource.widgets.product-stats-overview';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Products', Product::count())
                ->description('All products in your store')
                ->color('info'),
            Stat::make('Total Posts', Post::count())
                ->description('All articles and blog posts')
                ->color('success'),
            Stat::make('Published Posts', Post::where('is_published', true)->count())
                ->description('Posts currently live on your site')
                ->color('warning'),
        ];
    }
}
