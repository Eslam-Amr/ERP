<?php

namespace App\Http\Controllers\admin\Strat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StartPageController extends Controller
{
    public function index(){
        return view('admin.pages.start_page.index');
    }
}
