<?php

namespace App\Http\Controllers;

use App\Models\Tb_list;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home index


    public function list()
    {
        $tb_list = Tb_list::all();
        return view('index', ['lists' => $tb_list]);
    }

    //view create
    public function users_create()
    {
        return view('create');
    }

    //view create post
    public function create_user_data(Request $request)
    {

        Tb_list::create($request->all());

        return redirect()->route('list-index');
    }
}
