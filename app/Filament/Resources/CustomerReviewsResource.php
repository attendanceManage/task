<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerReviewsResource\Pages;
use App\Filament\Resources\CustomerReviewsResource\RelationManagers;
use App\Models\CustomerReviews;
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
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;


class CustomerReviewsResource extends Resource
{
    protected static ?string $model = CustomerReviews::class;

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
                FileUpload::make('image')
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->label('Name'),
               // TextColumn::make('description')->label('Description')
                TextColumn::make('home_page_id')->label('Home Page Id'),
                ImageColumn::make('image')->label('Image')->width(100)
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
            'index' => Pages\ListCustomerReviews::route('/'),
            'create' => Pages\CreateCustomerReviews::route('/create'),
            'edit' => Pages\EditCustomerReviews::route('/{record}/edit')
        ];
    }
}
