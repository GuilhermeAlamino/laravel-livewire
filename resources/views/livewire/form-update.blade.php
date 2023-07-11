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
                             <input type="hidden" class="form-control district @error('district') is-invalid @enderror"
                                 id="district" name="district" value="{{ $item->district }}">
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
