<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Girl;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;
use Orchid\Support\Facades\Layout;

class GirlEditLayout extends Rows
{

    public $title = 'Услуги';


    public function ddddd () {




        return [
            Group::make([
            CheckBox::make('readonly_checkbox')
                    ->title('Readonly Checkbox')
                    ->placeholder('Remember me'),
            TextArea::make( 'descriptiond' )
                        ->placeholder( 'Короткое описание' )
                        ->rows( 2 )->style( 'max-width: 100%;width: 100%;' ),
            ]),

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

                $this->ddddd()

        ];
    }
}
