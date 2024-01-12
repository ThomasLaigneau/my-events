<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\ListRecords;

class ListEvents extends ListRecords
{
    protected static string $resource = EventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'active' => Tab::make()->modifyQueryUsing(fn (Builder $query) => $query->whereDate('start_date', '>=', now())),
            'inactive' => Tab::make()->modifyQueryUsing(fn (Builder $query) => $query->whereDate('start_date', '<=', now())),
        ];
    }
}
