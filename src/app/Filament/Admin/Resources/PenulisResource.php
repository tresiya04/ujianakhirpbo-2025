<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PenulisResource\Pages;
use App\Filament\Admin\Resources\PenulisResource\RelationManagers;
use App\Models\Penulis;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenulisResource extends Resource
{
    protected static ?string $model = Penulis::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_penulis')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('asal')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\DatePicker::make('tanggal_lahir'),
                Forms\Components\Textarea::make('biografi')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('kontak')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_penulis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('asal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kontak')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListPenulis::route('/'),
            'create' => Pages\CreatePenulis::route('/create'),
            'edit' => Pages\EditPenulis::route('/{record}/edit'),
        ];
    }
}
