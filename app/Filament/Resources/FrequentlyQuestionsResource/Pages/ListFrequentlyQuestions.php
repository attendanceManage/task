<?php

namespace App\Filament\Resources\FrequentlyQuestionsResource\Pages;

use App\Filament\Resources\FrequentlyQuestionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFrequentlyQuestions extends ListRecords
{
    protected static string $resource = FrequentlyQuestionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
