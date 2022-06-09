<?php

namespace App\Orchid\Layouts\Girl;

use App\Models\Field;
use App\Models\Price;
use App\Orchid\Filters\RoleFilter;
use Orchid\Filters\Filter;
use Orchid\Screen\Layouts\Selection;

class GirlFiltersLayout extends Selection
{

    public function filters(): array
    {
        return [
            Price::class,
            Field::class
        ];
    }
}
