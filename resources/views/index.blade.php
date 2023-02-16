@extends('layouts.app')

@section('title', 'Lista')

@section('content')
    <div class="row p-0 m-0">
        <div class="col-12 d-flex justify-content-center">
            <div class="form-list-index">

                <div class="container mt-5">

                    <div class="row mb-5 d-flex align-items-center">
                        <div class="col-6">
                            <h1>Lista de Usuários</h1>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <a href="{{ route('users-create-list') }}" class="btn btn-success">Criar Usuário</a>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">CPF/CNPJ</th>
                                <th scope="col">RG</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Data de Nascimento</th>
                                <th scope="col">Estado Civil</th>
                                <th scope="col">Cep</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Complemento</th>
                                <th scope="col">Bairro</th>
                                <th scope="col">Estado</th>
                                <th colspan="2">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lists as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->user_name }}</td>
                                    <td>{{ $item->user_cpf }}</td>
                                    <td>{{ $item->user_rg }}</td>
                                    <td>{{ $item->user_phone }}</td>
                                    <td>{{ $item->user_birthdate }}</td>
                                    <td>{{ $item->user_estadocivil }}</td>
                                    <td>{{ $item->cep }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->complement }}</td>
                                    <td>{{ $item->district }}</td>
                                    <td>{{ $item->state }}</td>
                                    <th>
                                        <a href="{{route('edit-user',['id'=> $item->id])}}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                width="20" height="20">
                                                <path
                                                    d="M11.013 1.427a1.75 1.75 0 0 1 2.474 0l1.086 1.086a1.75 1.75 0 0 1 0 2.474l-8.61 8.61c-.21.21-.47.364-.756.445l-3.251.93a.75.75 0 0 1-.927-.928l.929-3.25c.081-.286.235-.547.445-.758l8.61-8.61Zm.176 4.823L9.75 4.81l-6.286 6.287a.253.253 0 0 0-.064.108l-.558 1.953 1.953-.558a.253.253 0 0 0 .108-.064Zm1.238-3.763a.25.25 0 0 0-.354 0L10.811 3.75l1.439 1.44 1.263-1.263a.25.25 0 0 0 0-.354Z">
                                                </path>
                                            </svg></a>
                                    </th>
                                    <th>
                                        <a href="#" class="btn btn-danger"><svg width="20" height="20" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16"
                                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg></a>
                                    </th>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
