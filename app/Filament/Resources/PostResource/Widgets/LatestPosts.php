<?php

namespace App\Filament\Resources\PostResource\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestPosts extends BaseWidget
{

    protected static ?string $heading = 'Latest Posts';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                \App\Models\Post::query()
                    ->latest()
                    ->take(5) // Limit to 5 latest posts
            )
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Post Title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('is_published')
                //     ->label('Published')
                //     ->boolean(),
            ])
            ->emptyStateDescription('There are no products available at the moment. You can add new products using the button below.');;
    }
}
