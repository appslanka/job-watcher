<?php

namespace Appslanka\JobWatcher\Filament\Resources;

use Filament\Tables;
use App\Models\JobBatch;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Appslanka\JobWatcher\Resources\JobBatchResource\Pages;
use Appslanka\JobWatcher\Filament\Resources\JobBatchResource\Pages\ManageJobBatches;

class JobBatchResource extends Resource
{
    protected static ?string $model = JobBatch::class;
    protected static ?string $navigationGroup = 'Job watcher';
    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->searchable(),

                Tables\Columns\TextColumn::make('name')
                    ->searchable(),

                Tables\Columns\TextColumn::make('total_jobs')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('pending_jobs')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('failed_jobs')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('cancelled_at')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                Tables\Columns\TextColumn::make('finished_at')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageJobBatches::route('/'),
        ];
    }
}
