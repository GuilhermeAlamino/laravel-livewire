require('./bootstrap');

$(document).ready(function () {

  //mask in cep
  $(".cep").mask("99999-999");

  var options = {
    onKeyPress: function (cpf, ev, el, op) {
      var masks = ['000.000.000-000', '00.000.000/0000-00'];
      $('.user_cpf').mask((cpf.length > 14) ? masks[1] : masks[0], op);
    }
  }

  $('.user_cpf').length > 11 ? $('.user_cpf').mask('00.000.000/0000-00', options) : $('.user_cpf').mask('000.000.000-00#', options);
  //mask in cof or cnpj 

  //mask in rg

  $('.user_rg').mask('99.999.999-9');    // Máscara para RG<br/>

  //mask and validate in phone

  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
    spOptions = {
      onKeyPress: function (val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };

  $('.user_phone').mask(SPMaskBehavior, spOptions);

  //mask and validate in birthdate

  var options = {
    onKeyPress: function (data, e, field, options) {
      console.log(data.length)

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

  $('.user_birthdate').mask('00/00/0000', options);
  // mascara e tratamentos de input

  $('#loading').fadeOut();

});