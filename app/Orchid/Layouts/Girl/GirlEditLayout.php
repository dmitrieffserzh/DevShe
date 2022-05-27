<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Girl;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;
use Orchid\Support\Facades\Layout;

class GirlEditLayout extends Rows
{

    public $title = 'Услуги';


    public function ddddd () {




        return [
            CheckBox::make('readonly_checkbox')
                    ->title('Readonly Checkbox')
                    ->placeholder('Remember me'),
            CheckBox::make('readonly_checkbox')
                    ->title('Readonly Checkbox')
                    ->placeholder('Remember me'),
            CheckBox::make('readonly_checkbox')
                    ->title('Readonly Checkbox')
                    ->placeholder('Remember me'),
            CheckBox::make('readonly_checkbox')
                    ->title('Readonly Checkbox')
                    ->placeholder('Remember me'),
        ];
    }


    public function fields(): array
    {

        return  [
            Group::make(
                $this->ddddd()
                )
        ];
    }
}
