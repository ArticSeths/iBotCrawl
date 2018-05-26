<?php
/*
Template Name: Inicio
*/

add_action('wp_enqueue_scripts', 'stylePage');
function stylePage() {
	$templateDir = get_template_directory_uri();
	wp_register_script('js-prueba', $templateDir . '/pages/prueba/js-prueba.js'); wp_enqueue_script('js-prueba');
	wp_register_style('css-prueba', $templateDir . '/pages/prueba/css-prueba.css'); wp_enqueue_style('css-prueba');
}

//get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kahooter</title>
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <style>
    html{
      background: #f5f5f5;
      font-family: 'Varela Round', sans-serif;
    }
    .panel{
      text-align: center;
      display: block;
      width: 400px;
      margin: auto;
      background: #fff;
      margin-top: 10%;
      padding: 10px;
      box-shadow: 0px 0px 10px #00000014;
      border-radius: 4px;
    }
    .panelJugar{
      text-align: center;
      display: block;
      width: 400px;
      margin: auto;
      background: #fff;
      margin-top: 10px;
      padding: 10px;
      box-shadow: 0px 0px 10px #00000014;
      border-radius: 4px;
    }
    h3{
      box-shadow: 0px 5px 5px -5px #ccc;
    }
    .player{
      display: block;
      width: 100%;
    }
    .player.listo{
      background: #3ee65a38;
      border: 1px solid #aff29a;
    }
    .btn-jugar{
      background: #54b6e4;
      color: #fff;
      margin: 15px 5px;
      padding: 10px;
      display: block;
      box-shadow: 0px 0px 10px #0000001a;
      cursor: pointer;
    }
    .btn-jugarDisabled{
      background: #ccc;
      color: #fff;
      margin: 15px 5px;
      padding: 10px;
      display: block;
      box-shadow: 0px 0px 10px #0000001a;
    }
    .btn-jugar:hover{
      background: #499fc7;
    }

    .posicion{
      font-size: 1.3em;
      font-weight: 900;
    }
  </style>
</head>
<body>
  <div clasS="panel">
    <h3>Jugadores</h3>
    <div id="userList"></div>
  </div>
  <div class="panelJugar">
    <a id="comenzar" class="btn-jugar" onclick="listo()">Listo!</a>
  </div>
  <script>
    var socket = io.connect('https://www.ibotcrawl:4500/' ,{'forceNew': true });
    var tokenID = '';
    jQuery(window).ready(function(){
      var name = prompt("Introduce tu nombre");
      if (name != null) {
        socket.emit('updateUserName', name);
      }
    });

    socket.on('whoami', function(data){tokenID = data});

    socket.on('disconnectedUser', function(data){
      jQuery('[data-id="'+data+'"]').remove();
      jQuery('[data-idmarcador="'+data+'"]').remove();
    });

    socket.on('updateListUsers', function(data){
      console.log(data);
      // Juego para mas de 1 jugador
      if(data.length > 1){
        jQuery('#comenzar').removeClass('btn-jugarDisabled').addClass('btn-jugar').text('Listo!').prop('disabled', false);
      }else{
        jQuery('#comenzar').removeClass('btn-jugar').addClass('btn-jugarDisabled').text('Esperando a más jugadores...').prop('disabled', true);
      }
      // ----------

      // Actualizamos la lista de usuarios online
      jQuery('#userList').html('');
      jQuery.each(data, function( index, value ) {
        if(!jQuery('[data-id="'+value[0]+'"]').length){
          var html = '<div class="player '+value[2]+'" data-id="'+value[0]+'"><div class="posicion"></div> <div class="nombre">'+value[1]+'</div></div>';
          jQuery('#userList').append(html);
        }
      });
      // -----------------

      jQuery.each(data, function( index, value ) {
        if(value[0].indexOf(tokenID) > -1){
          if(data[index][2] == 'listo'){
            jQuery('#comenzar').removeClass('btn-jugar').addClass('btn-jugarDisabled').text('Esperando a que estén listos todos').prop('disabled', true);
          }
        }
      });
    });

    socket.on('tiempoAtras', function(data){
      if(data == 'SMASH!!'){
        jQuery('#comenzar').removeClass('btn-jugarDisabled').addClass('btn-jugar').text(data).prop('disabled', false);
      }else{
        jQuery('#comenzar').removeClass('btn-jugar').addClass('btn-jugarDisabled').text(data).prop('disabled', true);
      }
    });

    socket.on('updatePosUsers', function(data){
      jQuery.each(data, function( index, value ) {
        jQuery('[data-id="'+value[0]+'"] .posicion').text(value[3]);
      });
    });


    function listo(){
      if(jQuery('#comenzar').hasClass('btn-jugar') && jQuery('#comenzar').text() == 'Listo!'){
        socket.emit('clienteListo');
      }

      if(jQuery('#comenzar').hasClass('btn-jugar') && jQuery('#comenzar').text() == 'SMASH!!'){
        socket.emit('SMASH');
        jQuery('#comenzar').removeClass('btn-jugar').addClass('btn-jugarDisabled').text('').prop('disabled', true);
      }
    }
  </script>
</body>
</html>

<?php
//get_footer();
?>
