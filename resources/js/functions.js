$(document).ready(function () {
  $('#message-invalid').hide();
  $('#message-not-location').hide();
  $('#message-success').hide();

  function clear_form() {
    // Limpa valores do formulário de cep.
    $("#address").val("");
    $("#complement").val("");
    $("#district").val("");
    $("#state").val("");
  }

  //Quando o campo cep perde o foco.
  $("#cep").blur(function () {

    //Nova variável "cep" somente com dígitos.
    var cep = $(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

      //Expressão regular para validar o CEP.
      var validateCep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if (validateCep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        $("#address").val("");
        $("#complement").val("");
        $("#district").val("");
        $("#state").val("");

        //Consulta o webservice viacep.com.br/
        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

          if (!("erro" in dados)) {
            //Atualiza os campos com os valores da consulta.
            $("#address").val(dados.logradouro);
            $("#complement").val(dados.complemento);
            $("#district").val(dados.bairro);
            $("#state").val(dados.localidade);
            $('#message-invalid').hide();
            $('#message-not-location').hide();
            setTimeout(function () {
              $('#message-success').fadeIn();
            }, 1000);
          } //end if.
          else {
            //CEP pesquisado não foi encontrado.
            clear_form();
            $('#message-success').hide();
            $('#message-invalid').hide();

            setTimeout(function () {
              $('#message-not-location').fadeIn();
            }, 1000);

          }
        });
      } //end if.
      else {
        //cep é inválido.
        clear_form();
        $('#message-success').hide();
        $('#message-not-location').hide();

        setTimeout(function () {
          $('#message-invalid').fadeIn('slow');
        }, 1000);
      }
    } //end if.
    else {
      //cep sem valor, limpa formulário.
      clear_form();
      $('#message-invalid').hide();
      $('#message-not-location').hide();
      $('#message-success').hide();
    }
  });

  //mask in cep

  $("#cep").mask("99999-999");

  //mask and validate in cpf or cnpj

  var options = {
    onKeyPress: function (cpf, ev, el, op) {
      var masks = ['000.000.000-000', '00.000.000/0000-00'];
      $('#user_cpf').mask((cpf.length > 14) ? masks[1] : masks[0], op);
    }
  }

  $('#user_cpf').length > 11 ? $('#user_cpf').mask('00.000.000/0000-00', options) : $('#user_cpf').mask('000.000.000-00#', options);

  //mask in rg

  $('#user_rg').mask('99.999.999-9');    // Máscara para RG<br/>

  //mask and validate in phone

  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
    spOptions = {
      onKeyPress: function (val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };

  $('#user_phone').mask(SPMaskBehavior, spOptions);

  //mask and validate in birthdate

  var options = {
    onKeyPress: function (data, e, field, options) {
      console.log(data.length)

      var dia = data.split('/')[0],
        mes = data.split('/')[1];

      if (data.length >= 2) {
        if (dia > 31) $('#user_birthdate').val('31/');
      }

      if (data.length >= 5) {
        if (mes > 12) $('#user_birthdate').val(dia + '/12/');
      }

    }
  };

  $('#user_birthdate').mask('00/00/0000', options);
});