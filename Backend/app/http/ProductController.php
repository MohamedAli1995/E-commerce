
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return response()->json([
            ["id"=>1,"name"=>"Egg Box","price"=>7.5],
            ["id"=>2,"name"=>"Milk","price"=>3.2]
        ]);
    }

    public function show($id) {
        return response()->json(["id"=>$id,"name"=>"Egg Box","price"=>7.5]);
    }
}
