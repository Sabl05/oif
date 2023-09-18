<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Types\Where;
use Orchid\Filters\Types\WhereDateStartEnd;
use Orchid\Screen\AsSource;
use Orchid\Attachment\Attachable;

class ProductCategory extends Model
{
    use HasFactory;
    use AsSource;
    use Filterable;
    use Attachable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'margin_default',
        'image_filename',
        'parent_id'
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id'             => Where::class,
        'name'           => Like::class,
        'margin_default' => Where::class,
        'updated_at'     => WhereDateStartEnd::class,
        'created_at'     => WhereDateStartEnd::class,
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'margin_default',
        'updated_at',
        'created_at',
    ];
}
