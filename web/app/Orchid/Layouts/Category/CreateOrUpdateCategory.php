<?php

namespace App\Orchid\Layouts\Category;

use App\Models\ProductCategory;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layouts\Rows;

class CreateOrUpdateCategory extends Rows
{
    protected $title;

    protected function fields(): array
    {
        return [
            Input::make('category.id')->type('hidden'),

            Input::make('category.name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Название категорий'))
                ->placeholder(__('Название')),

            Input::make('category.margin_default')
                ->type('number')
                ->max(255)
                ->required()
                ->title(__('Название категорий'))
                ->placeholder(__('Название')),

            Select::make('category.parent_id')
                ->fromModel(ProductCategory::class, 'name', 'id')
                ->help('Родительная категория')->empty('Не известно'),

            // Input::make('category.image_filename')
            //     ->type('text')
            //     ->max(255)
            //     ->required()
            //     ->title(__('Название категорий'))
            //     ->placeholder(__('Название')),

            Upload::make('client.image_filename')
                ->title('Загрузите фото')
        ];
    }
}
