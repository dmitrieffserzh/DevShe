<?php

namespace App\Orchid\Layouts\User;

use App\Models\Field;
use App\Models\Price;
use App\Orchid\Filters\RoleFilter;
use Orchid\Filters\Filter;
use Orchid\Screen\Layouts\Selection;

class GirlFiltersLayout extends Selection
{
    /**
     * @return string[]|Filter[]
     */
    public function filters(): array
    {
        return [
            Price::class,
            Field::class
        ];
    }
}
