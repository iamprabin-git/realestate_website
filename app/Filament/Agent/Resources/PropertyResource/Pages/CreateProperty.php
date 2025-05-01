<?php

namespace App\Filament\Agent\Resources\PropertyResource\Pages;

use Filament\Actions;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Agent\Resources\PropertyResource;

class CreateProperty extends CreateRecord
{
    protected static string $resource = PropertyResource::class;

protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['agent_id'] = Auth::guard('agent')->user()->id;
    return $data;
}
}
