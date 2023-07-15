<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Statistic;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application as ContractApplication;

class ProductController extends Controller
{
    public function index() : View | Application | Factory | ContractApplication
    {
        return view('pages.products.index');
    }

    public function show($id) : View | Application | Factory | ContractApplication
    {
        $statistic = Statistic::query()->where('id', 1)->first();
        $statistic->count = $statistic->count + 1;
        $statistic->save();

        return view('pages.products.show');
    }
}
