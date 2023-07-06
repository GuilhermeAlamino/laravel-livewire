<?php

namespace App\Http\Controllers;

use App\Http\Requests\create_user_data;
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
    public function create_user_data(create_user_data $request)
    {
        Tb_list::create($request->validated());

        return redirect()->route('users-create-list')->with('success', 'Registro criado com sucesso!');
    }

    //view edit 
    public function edit_user_data($id)
    {

        $user = Tb_list::where('id', $id)->first();

        if (empty($user)) {
            return redirect()->route('list-index');
        }

        return view('edit', ['user' => $user]);
    }

    //view update edit 
    public function update_edit_user_data(Request $request, $id)
    {
        $data = [
            'user_name' => $request->user_name,
            'user_cpf' => $request->user_cpf,
            'user_rg' => $request->user_rg,
            'user_phone' => $request->user_phone,
            'user_birthdate' => $request->user_birthdate,
            'user_estadocivil' => $request->user_estadocivil,
            'cep' => $request->cep,
            'address' => $request->address,
            'complement' => $request->complement,
            'district' => $request->district,
            'state' => $request->state
        ];

        Tb_list::where('id', $id)->update($data);

        return redirect()->route('edit-user', ['id' => $id])->with('success', 'Registro atualizado com sucesso!');
    }

    //view update edit 
    public function delete_user_data($id)
    {
        Tb_list::where('id', $id)->delete();

        return redirect()->route('list-index')->with('success', 'Registro deletado com sucesso!');
    }
}
