<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\User2Controller;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Admin;


Route::namespace('Frontend')->prefix('frontend')->group(function(){
    Route::get('/frontend',[Frontend\HomeController::class,'index']);
    Route::get('/aboutFrontend',[Frontend\aboutFrontendController::class,'about']);
});

// Route::namespace('Admin')->prefix('admin')->group(function(){
//     Route::get('/Dashboardadmin',[Admin\DashboardController::class,'index']);
//     Route::get('/adminUsers',[Admin\AdminHomeController::class,'index']);
// });


Route::namespace('Admin')->prefix('admin')->group(function(){
    Route::get('/DashboardController',[Admin\DashboardController::class,'index']);
    Route::get('/adminUsers',[Admin\AdminHomeController::class,'index']);
    Route::get('/settings',[Admin\SettingsController::class,'index']);
});

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

Route::get('/', function () {
    return view('cate');
});
Route::get('/test' , function () {  
    return view('test');
});
// Route::get('/news',function(){
//     return 'news screen';
// });
// Route::get('/product',function(){
//     return 'product screen';
// });

Route::prefix('backend')->group(function(){
    Route::get('/user','Backend\User2Controller@index')->name('backend.user');
    Route::get('/product',[Backend\ProductController::class,'index'])->name('backend.product');
    Route::get('/category',[Backend\CategoryController::class,'index'])->name('backend.category');
    Route::get('/news',[Backend\NewsController::class,'index'])->name('backend.news');
});

// Route::get('/',[User2Controller::class,'index']);



// Route::get('/user',function(){
//     return 'user screen';
// });
// Route::get('/user-managerment',function(){
//     return 'user screen';
// })->name('user');
// Route::get('/service',function(){
//     return 'service screen';
// });
// Route::get('/category',function(){
//     return 'category screen';
// });
// Route::get('news/{id}',function($id){
//     return "id cua bai viet nay la ${id}";
// });
// Route::get('news/{id}/category/{cateid}',function($id,$cateid){
//     return "id cua bai viet nay la ${id}, id chuyen muc la ${cateid}";
// });
// response array
// Route::get('/users',function(){
//     return ['cong nhan','lap trinh vien','tho xay'];
// });
// response object
// Route::get('/aboutMe',function(){
//     return response()->json([
//         'name'=>'Tong Duc Nam',
//         'job'=>'Lap trinh vien',
//         'age'=>2000
//     ]);
// });

// Route::get('/something',function(){
//     redirect('/');
// });

// Route::get('user/{id}',function($id){
//     return "User Id: ${id}";
// })->name('user.show');

// Route::get('user/{id}/branch/{branchId}',function($id,$branchId){
//     return "User id: ${id}, Branch id: ${branchId}";
// })->name('user.show.branch');


// Route::get('backend/user-management',function(){
//     return 'User management';
// })->name('backend.user');
// Route::get('backend/product-management',function(){
//     return 'User product management';
// })->name('backend.product');
// Route::get('backend/category-management',function(){
//     return 'user category management';
// })->name('backend.category');
// Route::get('backend/news-management',function(){
//     return 'User news management';
// })->name('backend.news');


// // Route::prefix('backend')->group(function(){
// Route::group(['prefix'=>'backend'],function(){
//     Route::get('user-management',function(){
//         return 'User management';
//     })->name('backend.user');
//     Route::get('product-management',function(){
//         return 'User product management';
//     })->name('backend.product');
//     Route::get('category-management',function(){
//         return 'user category management';
//     })->name('backend.category');
//     // Route::get('news-management',function(){
//     //     return 'User news management';
//     // })->name('backend.news');
    
// });

// Route::get('/',function(){
//     return view('home');
// });

// Route::get('/',[HomeController::class,'index']);
// Route::get('/about',[AboutController::class,'index']);

// Route::get('news','NewsController@index')->name('backend.news');

// Route::get('/news',[NewsController::class,'index']);
// Route::get('/aboutMenews',function(){
//     return response()->json([
//         'name'=>'Tong Duc Nam',
//         'email'=>'Sunlight',
//     ]);
// });
// Route::get('/something',function(){
//     return redirect('/');
// });


// Route::get('/',[HomeController::class,'index']);

