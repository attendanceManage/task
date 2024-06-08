<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FrequentlyQuestionsResource\Pages;
use App\Filament\Resources\FrequentlyQuestionsResource\RelationManagers;
use App\Models\FrequentlyQuestions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;

class FrequentlyQuestionsResource extends Resource
{
    protected static ?string $model = FrequentlyQuestions::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')->columnSpan(2)->required(),
                RichEditor::make('description')->columnSpan(2),
                Select::make('home_page_id')->options([
                    1=>'Slider',
                    2=>'Hero Section',
                    3=>'Product',
                    4=>'Customer Reviews',
                    5=>'Frequently Questions',
            
                ])->columnSpan(2),
                

                 
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                
                TextColumn::make('name')->label('Name'),
               // TextColumn::make('description')->label('Description')
                TextColumn::make('home_page_id')->label('Home Page Id')
              
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
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
            'index' => Pages\ListFrequentlyQuestions::route('/'),
            'create' => Pages\CreateFrequentlyQuestions::route('/create'),
            'edit' => Pages\EditFrequentlyQuestions::route('/{record}/edit'),
            
        ];
    }
}
