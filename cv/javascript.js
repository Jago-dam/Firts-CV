$(document).ready(function(){
    $('form').submit(function(e){
      e.preventDefault();
      
      var captchaValue = $('#captcha').val();
      captchaValue = captchaValue.toLowerCase();
      
      if (captchaValue == 'F6nYd1') {
        $('body').append('<span class="notice">¡Correcto!</span>');
      } 
      else {
        alert('El código no es valido');
        return null
      }
    });
   
    $('#bot').click(function(e){
      e.preventDefault();
      $('head link, head style').remove();
      $('#captcha').val('');
      $('.notice').remove();
      $(this).remove();
    });
  });