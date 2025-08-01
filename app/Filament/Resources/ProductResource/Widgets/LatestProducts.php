<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestProducts extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                \App\Models\Product::latest()
                    ->limit(5) // Limit to 5 latest products
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Product Name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Add New Product')
                    ->icon('heroicon-o-plus')
                    ->url(route('filament.admin.resources.products.create')),
            ])->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ExportBulkAction::make(),
                ]),
            ])->emptyStateActions([
                Tables\Actions\CreateAction::make()
                    ->label('Add New Product')
                    ->icon('heroicon-o-plus')
                    ->url(route('filament.admin.resources.products.create')),
            ])->emptyStateHeading('No Products Found')
            ->emptyStateDescription('There are no products available at the moment. You can add new products using the button below.');
    }
}
