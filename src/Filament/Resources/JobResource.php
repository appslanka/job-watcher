<?php

namespace Appslanka\JobWatcher\Filament\Resources;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Appslanka\JobWatcher\Models\Job;
use Appslanka\JobWatcher\Resources\JobResource\Pages;
use Appslanka\JobWatcher\Filament\Resources\JobResource\Pages\ManageJobs;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;
    protected static ?string $navigationGroup = 'Job watcher';
    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('queue')
                    ->searchable(),

                Tables\Columns\TextColumn::make('attempts')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('reserved_at')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('available_at')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => ManageJobs::route('/'),
        ];
    }
}
