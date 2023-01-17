<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;
use App\Models\Product;
use App\Models\Category;

class UserController extends Controller
{
    //


    public function index(){

        // one to one relationship


       
    

        $users =User::with('phone')->get();
        // one to one inverse relationship
        $phones =Phone::with('user')->get();

        // has many relation ship one category have many products
        $categories =Category::with('products')->get();

        //  one to many  inverse

        $products =Product::with('category')->get();

        // one many through

        $userCountry=User::with('userCountry')->get();

        // has many through

        $users=  User::with('permissions')->get();

        $users=  User::with('roles')->get();
        dd($users);
      
       
    }
}
