<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_list extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_cpf',
        'user_rg',
        'user_phone',
        'user_birthdate',
        'user_estadocivil',
        'cep',
        'address',
        'complement',
        'district',
        'state'
    ];
}
