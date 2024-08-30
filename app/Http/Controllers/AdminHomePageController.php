<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
    public function __invoke($id)
    {
            if(view()->exists($id)){
                return view($id);
            }
            else
            {
                return view('404');
            }

         //   return view($id);
        } 
}
