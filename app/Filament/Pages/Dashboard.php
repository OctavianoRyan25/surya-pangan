<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Tables\Columns\Layout\Panel;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $title = 'Dashboard';

    protected static string $view = 'filament.resources.admin-resource.pages.dashboard';

    protected static ?int $navigationSort = -1;

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('admin')
            ->path('admin')
            ->login()
            ->home(static::class)
            ->brandName('Surya Pangan')
            ->brandLogo(asset('assets/images/logo.jpg'))
            ->colors([
                'primary' => '#F59E0B', // Amber color
            ]);
    }

    public function getProductsCount(): int
    {
        return \App\Models\Product::count();
    }

    public function getPostsCount(): int
    {
        return \App\Models\Post::count();
    }

    protected function getHeaderWidgets(): array
    {
        return [
            \App\Filament\Pages\AllStatsOverview::class,
            \App\Filament\Resources\PostResource\Widgets\LatestPosts::class,
            \App\Filament\Resources\ProductResource\Widgets\LatestProducts::class,
        ];
    }
}
