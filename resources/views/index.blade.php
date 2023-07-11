@extends('layouts.app')

@section('title', 'Lista')

@section('content')

    <div class="container">

        <div class="msg-flush pt-3">
            @if (session('success'))
                <div class="{{ session('success.class') }}">
                    {{ session('success.message') }}
                </div>
            @endif
        </div>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Laravel <b>LiveWire</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                class="material-icons">&#xE147;</i> <span>Adicionar Registro</span></a>
                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF/CNPJ</th>
                            <th>RG</th>
                            <th>Telefone</th>
                            <th>Data de Nascimento</th>
                            <th>Estado Civil</th>
                            <th>Cep</th>
                            <th>Endereço</th>
                            <th>Complemento</th>
                            <th>Bairro</th>
                            <th>Estado</th>
                            <th colspan="2" class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($lists) > 0)
                            @foreach ($lists as $item)
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                            <label for="checkbox1"></label>
                                        </span>
                                    </td>
                                    <th>{{ $item->id }}</th>
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
                                    <td>
                                        <a href="#editEmployeeModal{{ $item->id }}" class="edit"
                                            data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                                title="Editar">&#xE254;</i></a>

                                    </td>
                                    <td>

                                        <a href="#deleteEmployeeModal{{ $item->id }}" class="delete"
                                            data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                                title="Delete">&#xE872;</i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="14" class="text-center">Nenhum registro disponível...</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Anterior</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Proximo</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                @livewire('form-create')
            </div>
        </div>
    </div>
    
    <!-- Edit Modal HTML -->
    @foreach ($lists as $item)
        <div id="editEmployeeModal{{ $item->id }}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('update-edit-user', ['id' => $item->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h4 class="modal-title">Editar Registro</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text"
                                    class="form-control user_name @error('user_name') is-invalid @enderror" id="user_name"
                                    name="user_name" value="{{ $item->user_name }}">
                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>CPF / CNPJ</label>
                                <input type="text" class="form-control user_cpf @error('user_cpf') is-invalid @enderror"
                                    id="user_cpf" name="user_cpf" value="{{ $item->user_cpf }}">
                                @error('user_cpf')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>RG</label>
                                <input class="form-control user_rg @error('user_rg') is-invalid @enderror" id="user_rg"
                                    name="user_rg" value="{{ $item->user_rg }}">
                                @error('user_rg')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text"
                                    class="form-control user_phone @error('user_phone') is-invalid @enderror"
                                    id="user_phone" name="user_phone" value="{{ $item->user_phone }}">
                                @error('user_phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Data de Nascimento</label>
                                <input type="text"
                                    class="form-control user_birthdate @error('user_birthdate') is-invalid @enderror"
                                    id="user_birthdate" name="user_birthdate" value="{{ $item->user_birthdate }}">
                                @error('user_birthdate')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Estado Civil</label>
                                <input type="text"
                                    class="form-control user_estadocivil @error('user_estadocivil') is-invalid @enderror"
                                    id="user_estadocivil" name="user_estadocivil" value="{{ $item->user_estadocivil }}">
                                @error('user_estadocivil')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control cep @error('cep') is-invalid @enderror"
                                    id="cep" name="cep" value="{{ $item->cep }}">
                                @error('cep')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control address @error('address') is-invalid @enderror"
                                    id="address" name="address" value="{{ $item->address }}">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden"
                                    class="form-control complement @error('complement') is-invalid @enderror"
                                    id="complement" name="complement" value="{{ $item->complement }}">
                                @error('complement')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden"
                                    class="form-control district @error('district') is-invalid @enderror" id="district"
                                    name="district" value="{{ $item->district }}">
                                @error('district')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control state @error('state') is-invalid @enderror"
                                    id="state" name="state" value="{{ $item->state }}">
                                @error('state')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                            <input type="submit" class="btn btn-info" value="Salvar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Delete Modal HTML -->
    @foreach ($lists as $item)
        <div id="deleteEmployeeModal{{ $item->id }}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('delete_user', ['id' => $item->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="modal-header">
                            <h4 class="modal-title">Deletar Registro</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Tem certeza de que deseja excluir esses registros?</p>
                            <p class="text-danger"><small>Essa ação não pode ser desfeita.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    @endforeach

@endsection