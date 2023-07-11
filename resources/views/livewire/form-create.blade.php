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
                <input type="text" class="form-control user_rg @error('user_rg') is-invalid @enderror"
                    wire:model="user_rg" id="user_rg" value="{{ old('user_rg') }}">
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
                    wire:model="address" id="address" value="{{ old('address') }}">
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Complemento</label>
                <input type="text" class="form-control complement @error('complement') is-invalid @enderror"
                    wire:model="complement" id="complement" value="{{ old('complement') }}">
                @error('complement')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Bairro</label>
                <input type="text" class="form-control district @error('district') is-invalid @enderror"
                    wire:model="district" id="district" value="{{ old('district') }}">
                @error('district')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Estado</label>
                <input type="text" class="form-control state @error('state') is-invalid @enderror"
                    wire:model="state" id="state" value="{{ old('state') }}">
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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
        <script>
            function renderCodeBlock() {
                //mask in cep
                $(".cep").mask("99999-999");

                //mask and validate in cpf or cnpj
                var options = {
                    onKeyPress: function(cpf, ev, el, op) {
                        var masks = ['000.000.000-000', '00.000.000/0000-00'];
                        $('.user_cpf').mask((cpf.length > 14) ? masks[1] : masks[0], op);
                    }
                }

                $('.user_cpf').length > 11 ? $('.user_cpf').mask('00.000.000/0000-00', options) : $('.user_cpf').mask(
                    '000.000.000-00#', options);

                //mask in cof or cnpj 

                //mask in rg
                $('.user_rg').mask('99.999.999-9');

                //mask and validate in phone
                var SPMaskBehavior = function(val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                };

                var spOptions = {
                    onKeyPress: function(val, e, field, options) {
                        field.mask(SPMaskBehavior.apply({}, arguments), options);
                    }
                };

                $('.user_phone').mask(SPMaskBehavior, spOptions);

                //mask and validate in birthdate
                var optionsBirthdate = {
                    onKeyPress: function(data, e, field, options) {
                        var dia = data.split('/')[0],
                            mes = data.split('/')[1];

                        if (data.length >= 2) {
                            if (dia > 31) $('.user_birthdate').val('31/');
                        }

                        if (data.length >= 5) {
                            if (mes > 12) $('.user_birthdate').val(dia + '/12/');
                        }
                    }
                };

                $('.user_birthdate').mask('00/00/0000', optionsBirthdate);

                // mascara e tratamentos de input
            }

            $(".previous").click(function() {
                renderCodeBlock();
            });

            $(".next").click(function() {
                renderCodeBlock();
            });

            // Initial render
            renderCodeBlock();
        </script>
    </div>

    <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
        <button type="submit" class="btn btn-success">Adicionar</button>
    </div>
</form>
