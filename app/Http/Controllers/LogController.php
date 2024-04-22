<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function newLog(Request $request){
        // foreach($users as $category){
        //     $category->name === $request->category;
        //     $cont++;
        // }
        $users = User::with('categories')->get();




        return response()->json($users,200);
    }
}
