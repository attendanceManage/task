<?php

namespace App\Filament\Resources\FrequentlyQuestionsResource\Pages;

use App\Filament\Resources\FrequentlyQuestionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFrequentlyQuestions extends EditRecord
{
    protected static string $resource = FrequentlyQuestionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
