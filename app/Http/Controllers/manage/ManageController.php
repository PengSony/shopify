<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Model\Product;

class ManageController extends Controller
{
    public function getIndex()
    {
        $products = Product::all()->toArray();

        return view('manage.index', compact('products'));
    }

    public function getList()
    {
        $products = Product::all()->toArray();

        return view('manage.shop.list', compact('products'));
    }

    public function getAdd()
    {
        return view('manage.shop.add');
    }

    public function getEdit(Product $product)
    {
        return view('manage.shop.update', compact('product','id'));
    }

    public function getDelete(Product $product)
    {
        return view('manage.shop.delete', compact('product', 'id'));
    }
}