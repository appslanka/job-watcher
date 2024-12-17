<?php

namespace Appslanka\JobWatcher\Filament\Resources;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Appslanka\JobWatcher\Models\FailedJob;
use Appslanka\JobWatcher\Resources\FailedJobResource\Pages;
use Appslanka\JobWatcher\Filament\Resources\FailedJobResource\Pages\ManageFailedJobs;

class FailedJobResource extends Resource
{
    protected static ?string $model = FailedJob::class;
    protected static ?string $navigationGroup = 'Job watcher';
    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

  
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('uuid')
                    ->label('UUID')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('failed_at')
                    ->dateTime()
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
            'index' => ManageFailedJobs::route('/'),
        ];
    }
}
