<?php

use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController as WebsiteProduct;


// Dashboard Conrtoller
use App\Http\Controllers\Dashboard\DashboardMainController;
use App\Http\Controllers\Dashboard\ProductController as DashboardProduct;
use App\Http\Controllers\Dashboard\SubCategoryController;


// Website Conrtoller
//use App\Http\Controllers\Website\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->prefix(LaravelLocalization::setLocale())->group(function () {


        Route::controller(HomeController::class)->name('front.')->group(function () {
            Route::get('/home', 'index')->name('home');
            Route::get('/', 'index')->name('index');
            Route::get('/shop', [WebsiteProduct::class, 'shop'])->name('shop');
            Route::get('/single_shop/{id}', [WebsiteProduct::class, 'singleProduct'])->name('single_shop');
            Route::get('/single_category/{id}', [WebsiteProduct::class, 'singleCategory'])->name('single_category');
            Route::get('/contact', 'contact')->name('contact');
            Route::get('/cart', 'cart')->name('cart');
            Route::get('/about', 'about')->name('about');
            Route::get('/checkout', 'checkout')->name('checkout');
            Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
            Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
            Route::delete('/cart/{cid}/product/{pid}/remove', [CartController::class, 'remove'])->name('remove');

        });

        //Dashboard Routing
        Route::group(['middleware' => ['auth', 'dashboard']], function () {
            Route::prefix('dashboard')->name('dashboard.')->group(function () {
                Route::get('/', [DashboardMainController::class, 'index'])->name('home');
                Route::get('categories/create', [CategoriesController::class, 'create'])->name('categories.create');
                Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
                Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
                Route::get('/categories/{category}', [CategoriesController::class, 'show'])->name('categories.show');
                Route::get('categories/{category}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
                Route::put('categories/{category}', [CategoriesController::class, 'update'])->name('categories.update');
                Route::delete('categories/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
                Route::get('category/delete', [CategoriesController::class, 'delete'])->name('categories.delete');
                Route::get('category/restore/{id}', [CategoriesController::class, 'restore'])->name('categories.restore');
                Route::delete('category/forceDelete/{id}', [CategoriesController::class, 'forceDelete'])->name('categories.forceDelete');
                // Sub-Categories Routes
                Route::get('/sub-categories', [SubCategoriesController::class, 'index'])->name('sub-categories.index');
                Route::get('sub-categories/create', [SubCategoriesController::class, 'create'])->name('sub-categories.create');
                Route::post('/sub-categories', [SubCategoriesController::class, 'store'])->name('sub-categories.store');
                Route::get('sub-categories/{id}/show', [SubCategoriesController::class, 'show'])->name('sub-categories.show');
                Route::get('sub-categories/{subcategory}/edit', [SubCategoriesController::class, 'edit'])->name('sub-categories.edit');
                Route::put('sub-categories/{subcategory}', [SubCategoriesController::class, 'update'])->name('sub-categories.update');
                Route::delete('sub-categories/{subcategory}/destroy', [SubCategoriesController::class, 'destroy'])->name('sub-categories.destroy');
                Route::get('/sub-categories/delete', [SubCategoriesController::class, 'delete'])->name('sub-categories.delete');
                Route::get('/sub-categories/restore/{id}', [SubCategoriesController::class, 'restore'])->name('sub-categories.restore');
                Route::delete('/sub-categories/forceDelete/{id}', [SubCategoriesController::class, 'forceDelete'])->name('sub-categories.forceDelete');
                // Products Routes
                Route::get('/products', [DashboardProduct::class, 'index'])->name('products.index');
                Route::get('/products/create', [DashboardProduct::class, 'create'])->name('products.create');
                Route::post('/products', [DashboardProduct::class, 'store'])->name('products.store');
                Route::get('/products/show/{id}', [DashboardProduct::class, 'show'])->name('products.show');
                Route::get('/products/edit/{id}', [DashboardProduct::class, 'edit'])->name('products.edit');
                Route::put('/products/update/{id}', [DashboardProduct::class, 'update'])->name('products.update');
                Route::get('/products/delete', [DashboardProduct::class, 'delete'])->name('products.delete');
                Route::delete('/destroy/{id}', [DashboardProduct::class, 'destroy'])->name('products.destroy');
                Route::get('/products/restore/{id}', [DashboardProduct::class, 'restore'])->name('products.restore');
                Route::delete('/products/forceDelete/{id}', [DashboardProduct::class, 'forceDelete'])->name('products.forceDelete');

            });
        });
    });
