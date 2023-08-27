<?php

namespace App\Orchid\Layouts\Category;

use App\Models\ProductCategory;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

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
                ->render(fn (ProductCategory $category) => $category->name),
            TD::make('created_at', 'Дата создание')
                ->sort()
                ->render(fn (ProductCategory $category) => $category->created_at)
        ];
    }
}
