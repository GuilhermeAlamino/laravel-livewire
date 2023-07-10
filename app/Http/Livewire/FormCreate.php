<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use App\Models\Tb_list;

class FormCreate extends Component
{
    public $currentStep = 1;

    public $user_name, $user_cpf, $user_rg, $user_phone, $user_birthdate, $user_estadocivil, $cep, $address, $district, $state, $complement;

    protected $rules = [
        'user_name' => 'required',
        'user_cpf' => 'required',
        'user_rg' => 'required',
        'user_phone' => 'required',
        'user_birthdate' => 'required',
        'user_estadocivil' => 'required',
        'cep' => 'required',
        'address' => 'required',
        'district' => 'required',
        'state' => 'required',
        'complement' => 'required',
    ];

    public function save()
    {
        $validatedData = $this->validate([
            'user_name' => 'required',
            'user_cpf' => 'required',
            'user_rg' => 'required',
            'user_phone' => 'required',
            'user_birthdate' => 'required',
            'user_estadocivil' => 'required',
            'cep' => 'required',
            'address' => 'required',
            'district' => 'required',
            'state' => 'required',
            'complement' => 'required',
        ]);

        Tb_list::create($validatedData);

        return redirect()->route('list-index')->with('success', ['message' => 'Registro criado com sucesso!', 'class' => 'alert alert-success']);
    }

    public function updatedCep()
    {

        $response = Http::get("https://viacep.com.br/ws/{$this->cep}/json/");
        $data = $response->json();

        if ($data == null || isset($data['erro'])) return $this->clearFields();

        $this->cep = $data['cep'];
        $this->address = $data['logradouro'];
        $this->district = $data['bairro'];
        $this->state = $data['localidade'];
    }

    public function clearFields()
    {
        $this->cep = '';
        $this->address = '';
        $this->district = '';
        $this->state = '';
    }

    public function nextStep()
    {
        $this->currentStep++;
    }

    public function previousStep()
    {
        $this->currentStep--;
    }
    
}
