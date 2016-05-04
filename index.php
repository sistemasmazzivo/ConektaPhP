<?php

?>
<html>
    <head>
        <title>Productos</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link rel="icon" href="images/favicon.ico" type="favicon.ico" />
        <script type="text/javascript" src="js/script.js"></script>
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Stylish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
            Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //Custom Theme files -->
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="css/style_new.css" type="text/css" rel="stylesheet" media="all">
        <!-- js -->
        <script src="js/jquery-1.11.1.min.js"></script>
        
        
        <script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
        <!-- //js -->	
        <!-- start-smoth-scrolling-->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>	
        <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){		
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });
        </script>
        <!--//end-smoth-scrolling-->
        <!--pop-up-->
        <script src="js/menu_jquery.js"></script>
        <!--//pop-up-->
        <script type="text/javascript">
 
 // Conekta Public Key
  Conekta.setPublishableKey('key_C3gpXkrXFzHqMvbEoUFRqZA');
 
 // ...
</script>
    </head>
    <body>
        <form action="process_payment.php" method="POST" id="card-form">
  <span class="card-errors"></span>
  <div class="form-row">
    <label>
      <span>Nombre del tarjetahabiente</span>
      <input type="text" size="20" data-conekta="card[name]"/>
    </label>
  </div>
  <div class="form-row">
    <label>
      <span>Número de tarjeta de crédito</span>
      <input type="text" size="20" data-conekta="card[number]"/>
    </label>
  </div>
  <div class="form-row">
    <label>
      <span>CVC</span>
      <input type="text" size="4" data-conekta="card[cvc]"/>
    </label>
  </div>
  <div class="form-row">
    <label>
      <span>Fecha de expiración (MM/AAAA)</span>
      <input type="text" size="2" data-conekta="card[exp_month]"/><span>/</span>
    <input type="text" size="4" data-conekta="card[exp_year]"/>
    </label>
    
  </div>
<!-- Información recomendada para sistema antifraude -->
  <div class="form-row">
    <label>
      <span>Calle</span>
      <input type="text" size="25" data-conekta="card[address][street1]"/>
    </label>
  </div>
<div class="form-row">
    <label>
      <span>Colonia</span>
      <input type="text" size="25" data-conekta="card[address][street2]"/>
    </label>
  </div>
<div class="form-row">
    <label>
      <span>Ciudad</span>
      <input type="text" size="25" data-conekta="card[address][city]"/>
    </label>
  </div>
<div class="form-row">
    <label>
      <span>Estado</span>
      <input type="text" size="25" data-conekta="card[address][state]"/>
    </label>
  </div>
<div class="form-row">
    <label>
      <span>CP</span>
      <input type="text" size="5" data-conekta="card[address][zip]"/>
    </label>
  </div>
<div class="form-row">
    <label>
      <span>País</span>
      <input type="text" size="25" data-conekta="card[address][country]"/>
    </label>
  </div>
  <button type="submit">¡Pagar ahora!</button>
</form>
        <script>
        $(function () {
  $("#card-form").submit(function(event) {
    var $form = $(this);

    // Previene hacer submit más de una vez
    $form.find("button").prop("disabled", true);
    Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
   
    // Previene que la información de la forma sea enviada al servidor
    return false;
  });
});

var conektaSuccessResponseHandler = function(token) {
  var $form = $("#card-form");

  /* Inserta el token_id en la forma para que se envíe al servidor */
  $form.append($("<input type='hidden' name='conektaTokenId'>").val(token.id));
 
  /* and submit */
  $form.get(0).submit();
};
var conektaErrorResponseHandler = function(response) {
  var $form = $("#card-form");
  
  /* Muestra los errores en la forma */
  $form.find(".card-errors").text(response.message);
  $form.find("button").prop("disabled", false);
};

        </script>
    </body>
</html>
        
        
