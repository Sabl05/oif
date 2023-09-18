<?php

namespace App\Orchid\Layouts\Category;

use App\Models\ProductCategory;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\Button;

class CategoryListTable extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Найменование')->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(fn (ProductCategory $category) => ModalToggle::make($category->name)
                        ->modal('editCategory')
                        ->method('createOrUpdateCategory')
                        ->modalTitle('Редактирование категории ' . $category->name)
                        ->asyncParameters([
                            'category' => $category->id
                    ])
                ),
            TD::make('created_at', 'Дата создание')
                ->sort()
                ->render(fn (ProductCategory $category) => $category->created_at),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (ProductCategory $category) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([
                        Button::make(__('Удалить'))
                            ->icon('bs.trash3')
                            ->confirm(__('Данная запись будет удалена'))
                            ->method('remove', [
                                'id' => $category->id,
                            ]),
                    ])
                )
        ];
    }
}
