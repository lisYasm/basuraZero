
$('.collapse-block').on('click', function(){
     var parentdiv = $(this).parent().parent();
     var icone = $(this).find('i');
     var body = $('.panel-body');
     if (icone.hasClass('fa fa-chevron-up')){
          icone.removeClass('fa fa-chevron-up').addClass('fa fa-chevron-down');
          parentdiv.find(body).fadeOut(200);
     }else{
            icone.removeClass('fa fa-chevron-down').addClass('fa fa-chevron-up');
            parentdiv.find(body).fadeIn(200);
     }
});


$("#loginform").validate({
  rules: {
    saumail:{
      required: true,
      email: true
    },
    saupassword: "required",
  },
  messages: {
    saumail: messageerror1,
    saupassword: messageerror1,
  } 
});


$("#register").validate({
  rules: {
    nombre: "required",
    apellido: "required",
    mail:{
      required: true,
      email: true
    },
    password: "required",
  },
  messages: {
    nombre: messageerror1,
    apellido: messageerror1,
    mail: messageerror1,
    password: messageerror1,
  } 
});


$(function (){
    $('#calendar-now').datetimepicker({
        inline: true,
        sideBySide: true,
        format: 'DD/MM/YYYY'
    });
});