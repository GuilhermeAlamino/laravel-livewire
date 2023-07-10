<form wire:submit.prevent="save">
    @csrf
    <div class="modal-header">
        <h4 class="modal-title">Adicionar Registro</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
        @if ($currentStep === 1)
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control user_name @error('user_name') is-invalid @enderror"
                    wire:model="user_name" id="user_name" value="{{ old('user_name') }}">
                @error('user_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>CPF / CNPJ</label>
                <input type="text" class="form-control user_cpf @error('user_cpf') is-invalid @enderror"
                    wire:model="user_cpf" id="user_cpf" value="{{ old('user_cpf') }}">
                @error('user_cpf')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>RG</label>
                <input type="text" class="form-control user_rg @error('user_rg') is-invalid @enderror" wire:model="user_rg"
                    id="user_rg" value="{{ old('user_rg') }}">
                @error('user_rg')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control user_phone @error('user_phone') is-invalid @enderror"
                    wire:model="user_phone" id="user_phone" value="{{ old('user_phone') }}">
                @error('user_phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="text" class="form-control user_birthdate @error('user_birthdate') is-invalid @enderror"
                    wire:model="user_birthdate" id="user_birthdate" value="{{ old('user_birthdate') }}">
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
                    wire:model="user_estadocivil" id="user_estadocivil" value="{{ old('user_estadocivil') }}">
                @error('user_estadocivil')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        @elseif($currentStep === 2)
            <div class="form-group">
                <label>CEP</label>
                <input type="text" class="form-control cep @error('cep') is-invalid @enderror"
                    wire:model.lazy="cep" id="cep" value="{{ old('cep') }}">
                @error('cep')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Endereço</label>
                <input type="text" class="form-control address @error('address') is-invalid @enderror"
                    wire:model.defer="address" id="address" value="{{ old('address') }}">
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Complemento</label>
                <input type="text" class="form-control complement @error('complement') is-invalid @enderror"
                    wire:model.defer="complement" id="complement" value="{{ old('complement') }}">
                @error('complement')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" class="form-control district @error('district') is-invalid @enderror"
                    wire:model.defer="district" id="district" value="{{ old('district') }}">
                @error('district')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Estado</label>
                <input type="text" class="form-control state @error('state') is-invalid @enderror"
                    wire:model.defer="state" id="state" value="{{ old('state') }}">
                @error('state')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        @endif

        <!-- Botões de navegação entre as etapas -->
        @if ($currentStep > 1)
            <button class="previous" wire:click="previousStep">Voltar</button>
        @endif

        @if ($currentStep < 2)
            <button class="next" wire:click="nextStep">Próximo</button>
        @endif
    </div>

    <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
        <button type="submit" class="btn btn-success">Adicionar</button>
    </div>
</form>
