<?php


use App\Livewire\AdminDashboard;
use App\Livewire\ProductDetails;
use App\Livewire\ManageProduct;
use App\Livewire\ManageOrders;
use App\Livewire\AddProductForm;
use App\Livewire\ManageCategories;
use App\Livewire\AddCategory;
use App\Livewire\EditProduct;
use App\Livewire\ShoppingCartComponent;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/service', function () {
    return view('services');
});

Route::get('/about-us', function () {
    return view('aboutUs');
});

Route::get('/product/details/{id}', ProductDetails::class)->name('product.details');

Route::get('/shopping-cart',ShoppingCartComponent::class)->name('shopping-cart');


Route::group(['middleware' => 'admin'], function (){
    Route::get('/admin/dashboard',AdminDashboard::class)->name('dashboard');

    Route::get('/handle-products',ManageProduct::class);
    
    Route::get('/orders',ManageOrders::class);
    
    Route::get('/add/product',AddProductForm::class);

    Route::get('/manage/categories',ManageCategories::class);

    Route::get('/add/category',AddCategory::class);

    Route::get('/edit/{id}/product',EditProduct::class);

});



