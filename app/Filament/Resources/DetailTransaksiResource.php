<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DetailTransaksiResource\Pages;
use App\Filament\Resources\DetailTransaksiResource\RelationManagers;
use App\Models\DetailTransaksi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DetailTransaksiResource extends Resource
{
    protected static ?string $model = DetailTransaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListDetailTransaksis::route('/'),
            'create' => Pages\CreateDetailTransaksi::route('/create'),
            'edit' => Pages\EditDetailTransaksi::route('/{record}/edit'),
        ];
    }
}
