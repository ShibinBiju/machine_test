<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function dashboard(){

        if(Auth()->user()->role == 'admin'){
            return redirect()->route('admin.products.index');
        }

        return redirect()->route('web.home.index');

    }
}
