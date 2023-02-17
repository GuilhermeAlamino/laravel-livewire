@extends('layouts.app')

@section('title', 'Usuário')

@section('content')
    <div class="container mt-5">

        <div class="row p-0 m-0">
            <div class="col-12 d-flex justify-content-center">
                <form class="form-list" action="{{ route('create-user') }}" method="POST">
                    @csrf
                    <div class="container mt-5">

                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <h1>Criação de Usuário</h1>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a href="{{ route('list-index') }}" class="btn btn-success">Voltar</a>
                            </div>
                        </div>
                        <div class="form-row mt-5">
                            <div class="col-md-4 mb-3">
                                <label for="user_name">Nome</label>
                                <input type="text" class="form-control" id="user_name" name="user_name"
                                    placeholder="Nome" value="" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="user_cpf">CPF / CNPJ</label>
                                <input type="text" class="form-control" id="user_cpf" name="user_cpf" placeholder="CPF"
                                    value="" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="user_cpf">RG</label>
                                <input type="text" class="form-control" id="user_rg" name="user_rg" placeholder="RG"
                                    value="" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="user_phone">Telefone</label>

                                <input type="text" class="form-control" id="user_phone" name="user_phone"
                                    placeholder="Telefone" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="user_birthdate">Data de Nascimento</label>
                                <input type="text" class="form-control" id="user_birthdate" name="user_birthdate"
                                    placeholder="Data de Nascimento" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="user_estadocivil">Estado Civil</label>
                                <input type="text" class="form-control" id="user_estadocivil" name="user_estadocivil"
                                    placeholder="Estado Civil" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP"
                                    required>
                            </div>
                            <div class="col-md-9 mb-3">
                                <label for="address">Endereço</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Endereço" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="complement">Complemento</label>
                                <input type="text" class="form-control" id="complement" name="complement"
                                    placeholder="Complemento" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="district">Bairro</label>
                                <input type="text" class="form-control" id="district" name="district"
                                    placeholder="Bairro" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Estado</label>
                                <input type="text" class="form-control" id="state" name="state"
                                    placeholder="Estado" required>
                            </div>
                        </div>
                        <button class="col-12 btn btn-primary" type="submit">Enviar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
