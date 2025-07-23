<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\JudulResource\Pages;
use App\Filament\Admin\Resources\JudulResource\RelationManagers;
use App\Models\Judul;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JudulResource extends Resource
{
    protected static ?string $model = Judul::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('penulis')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('penerbit')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('tahun_terbit'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('penulis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('penerbit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_terbit'),
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
            'index' => Pages\ListJuduls::route('/'),
            'create' => Pages\CreateJudul::route('/create'),
            'edit' => Pages\EditJudul::route('/{record}/edit'),
        ];
    }
}
