<?php

namespace App\Orchid\Screens\Category;

use App\Models\ProductCategory;
use App\Orchid\Layouts\Category\CategoryListTable;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;

class CategoryListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'categories' => ProductCategory::filters()->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Категорий';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'Категорий продуктов.';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Создать категорию')
                ->modal('createCategory')
                ->icon('bs.plus-circle')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            CategoryListTable::class,

            Layout::modal('createCategory', Layout::rows([
                Input::make('user.name')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Name'))
                    ->placeholder(__('Name')),

                Input::make('file')
                    ->type('file')
            ])),
        ];
    }
}
