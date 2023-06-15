<?php

namespace App\Http\Controllers;

use App\Helper\RedirectHelper;
use App\Models\Categories;
use App\Models\ChildCategory;
use App\Models\Product;
use App\Models\ProductFile;
use App\Models\Review;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller {

  public function dashboard() {
//    return view('dashboard');
    return view('admin.index');
  }

  public function profile() {
    return view('admin.profile');
  }

//  public function userProfile() {
//    return to_route('profile');
//  }

  public function logout() {
    \auth()->logout();
    // \session()->flush();
    return redirect()->route('login');
  }







//   Start Here

public function home(){






    return view('site.index',);

}












}
