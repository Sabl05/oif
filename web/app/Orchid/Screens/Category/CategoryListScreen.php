<?php

namespace App\Orchid\Screens\Category;

use App\Models\ProductCategory;
use App\Orchid\Layouts\Category\CategoryListTable;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Screen;
use App\Orchid\Layouts\Category\CreateOrUpdateCategory;
use Orchid\Support\Facades\Toast;

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
                ->method('createOrUpdateCategory')
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

            Layout::modal('createCategory', CreateOrUpdateCategory::class)
                ->title('Создать категорию')
                ->applyButton('Создать'),

            Layout::modal('editCategory', CreateOrUpdateCategory::class)->async('asyncGetCategory')
        ];
    }

    public function asyncGetCategory(ProductCategory $category) : array
    {
        $category->load('image_filename');
        return [
          'category' => $category
        ];
    }

    public function createOrUpdateCategory(Request $request) : void
    {
        $category_id = $request->input('category.id');

        $category = ProductCategory::updateOrCreate([
            'id' => $category_id
        ], $request->all()['category']);

        $category->attachment()->syncWithoutDetaching(
            $request->input('client.image_input', [])
        );

        is_null($category_id) ? Toast::info('Клиент создан') : Toast::info('Клиент обновлен');
    }

    public function remove(Request $request): void
    {
        ProductCategory::findOrFail($request->get('id'))->delete();

        Toast::info(__('User was removed'));
    }
}
