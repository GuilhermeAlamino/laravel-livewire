<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationStore;
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

    //view create post
    public function store(ValidationStore $request)
    {
        Tb_list::create($request->validated());

        return redirect()->route('list-index')->with('success', ['message' => 'Registro criado com sucesso!', 'class' => 'alert alert-success']);
    }

    //view update edit 
    public function update(Request $request, $id)
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

        return redirect()->route('list-index', ['id' => $id])->with('success', ['message' => 'Registro atualizado com sucesso!', 'class' => 'alert alert-success']);
    }

    //view update edit 
    public function delete($id)
    {
        Tb_list::where('id', $id)->delete();

        return redirect()->route('list-index')->with('success', ['message' => 'Registro deletado com sucesso!', 'class' => 'alert alert-danger']);
    }
}
