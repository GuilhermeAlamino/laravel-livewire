@extends('layouts.app')

@section('title', 'Usuário')

@section('content')
    <div class="container mt-5">

        <div class="row p-0 m-0">

            <div class="col-12 d-flex justify-content-center">
                <form class="form-list" action="{{ route('create-user') }}" method="POST">
                    @csrf
                    <div class="container mt-5">

                        @if (session('success'))
                            <div class="col-12 alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <h1>Criação de Usuário</h1>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a href="{{ route('list-index') }}" class="btn btn-success">Voltar</a>
                            </div>
                        </div>
                        <div class="form-row mt-5">
                            <div class="col-md-3 mb-3">
                                <label for="user_name">Nome</label>
                                <input type="text" class="form-control @error('user_name') is-invalid @enderror"
                                    id="user_name" name="user_name" placeholder="Nome" value="{{ old('user_name') }}">
                                @error('user_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="user_cpf">CPF / CNPJ</label>
                                <input type="text" class="form-control  @error('user_cpf') is-invalid @enderror"
                                    id="user_cpf" name="user_cpf" placeholder="CPF" value="{{ old('user_cpf') }}">
                                @error('user_cpf')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="user_cpf">RG</label>
                                <input type="text" class="form-control  @error('user_rg') is-invalid @enderror"
                                    id="user_rg" name="user_rg" placeholder="RG" value="{{ old('user_rg') }}">
                                @error('user_rg')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="user_phone">Telefone</label>
                                <input type="text" class="form-control  @error('user_phone') is-invalid @enderror"
                                    id="user_phone" name="user_phone" placeholder="Telefone"
                                    value="{{ old('user_phone') }}">
                                @error('user_phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="user_birthdate">Data de Nascimento</label>
                                <input type="text" class="form-control @error('user_birthdate') is-invalid @enderror"
                                    id="user_birthdate" name="user_birthdate" placeholder="Data de Nascimento"
                                    value="{{ old('user_birthdate') }}">
                                @error('user_birthdate')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="user_estadocivil">Estado Civil</label>
                                <input type="text" class="form-control @error('user_estadocivil') is-invalid @enderror"
                                    id="user_estadocivil" name="user_estadocivil" placeholder="Estado Civil"
                                    value="{{ old('user_estadocivil') }}">
                                @error('user_estadocivil')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control @error('cep') is-invalid @enderror" id="cep"
                                    name="cep" placeholder="CEP" value="{{ old('cep') }}">
                                @error('cep')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-9 mb-3">
                                <label for="address">Endereço</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    id="address" name="address" placeholder="Endereço" value="{{ old('address') }}">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="complement">Complemento</label>
                                <input type="text" class="form-control @error('complement') is-invalid @enderror"
                                    id="complement" name="complement" placeholder="Complemento"
                                    value="{{ old('complement') }}">
                                @error('complement')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="district">Bairro</label>
                                <input type="text" class="form-control @error('district') is-invalid @enderror"
                                    id="district" name="district" placeholder="Bairro" value="{{ old('district') }}">
                                @error('district')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Estado</label>
                                <input type="text" class="form-control @error('state') is-invalid @enderror"
                                    id="state" name="state" placeholder="Estado" value="{{ old('state') }}">
                                @error('state')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button class="col-12 btn btn-primary" type="submit">Enviar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
