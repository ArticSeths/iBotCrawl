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
    <title>Prueba</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
    <script  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.2.1/pnotify.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.2.1/pnotify.brighttheme.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.2.1/pnotify.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.2.1/pnotify.animate.js"></script>
</head>
<body>
    <div class="point" style="position: absolute;top: 400px;left: 400px;width: 15px; height: 15px;border-radius:100px;background:red;"></div>
    <div class="marcador"></div>
    <input id="mensaje">
    <style media="screen">
        html{
          cursor: none;
          background: #f5f5f5;
        }
        .player{
            width: 100px;
            height: 60px;
            padding-top: 40px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 0px 5px #ccc;
            font-family: monospace;
            font-weight: 900;
            position: absolute;
        }

        .mensaje{
            position: absolute;
            bottom: 110px;
            left: -15px;
            max-width: 100px;
            min-width: 100px;
            border: 1px solid #ccc;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 0.8em;
            text-align: left;
        }

        input#mensaje{
            position: fixed;
            bottom: 0;
            font-size: 3em;
            z-index: 1;
            width: 100%;
            margin-left: -10px;
            background-color: white;
            font-family: monospace;
            border-top: 1px solid #ccc;
            box-shadow: 0px 0px 5px #ccc;
        }

        .marcador{
            position: absolute;
            bottom: 60px;
            background: #ffffff75;
            border-radius: 10px;
            box-shadow: 0px 0px 5px #ccc;
            border: 1px solid #ccc;
            width: 200px;
            min-height: 150px;
            right: 10px;
            z-index: 1;
        }

        .marcadorUser{
            display: block;
            width: 100%;
            margin: 10px;
        }
    </style>
    <!-- <div id="casilla"></div>
    <div id="mensajes">

    </div>
    <textarea id="texto"></textarea>
    <button onclick="enviar()">Enviar</button> -->
    <script>
            var socket = io.connect('https://ibotcrawl.com:3000/' ,{'forceNew': true });
            jQuery(window).ready(function(){
                socket.emit('checkUsers');

                var name = prompt("Introduce tu nombre");
                if (name != null) {
                    socket.emit('saveName', name);
                }
            });
            socket.on('connectedUser', function(data){
                new PNotify({
                    text: 'Un usuario se ha conectado!',
                    type: 'success'
                });
            });

            socket.on('disconnectedUser', function(data){
                jQuery('[data-id="'+data+'"]').remove();
                jQuery('[data-idmarcador="'+data+'"]').remove();
                new PNotify({
                    text: 'Se ha desconectado un usuario',
                    type: 'error'
                });
            });

            socket.on('checkUsers', function(data){
                jQuery.each(data, function( index, value ) {
                  if(!jQuery('[data-id="'+value[0]+'"]').length){
                      var html = '<div class="player" style="background: '+value[2]+';" data-id="'+value[0]+'"><div class="nombre">'+value[1]+'</div><div class="mensaje"></div></div>';
                      jQuery('body').append(html);
                      html = '<div data-idmarcador="'+value[0]+'" class="marcadorUser">'+value[1]+': <strong>'+value[3]+'</strong></div>';
                      jQuery('.marcador').append(html);
                  }
                });
            });

            socket.on('saveName', function(data){
                jQuery('[data-id="'+data[0]+'"]').find('.nombre').text(data[1]);
                jQuery('[data-idmarcador="'+data[0]+'"]').html(data[1]+': <strong>'+data[3]+'</strong>');
                jQuery('[data-id="'+data[0]+'"]').css('background', data[2]);
            });

            socket.on('move', function(data){
                var pos = data[1].split(",");
                var posx = pos[0]+'px';
                var posy = pos[1]+'px';
                jQuery('[data-id="'+data[0]+'"]').css({"top": posy, "left": posx});
                if(collision(jQuery('[data-id="'+data[0]+'"]'), jQuery('.point'))){
                    jQuery('.point').css({"top": '-99px', "left": "-99px"});
                    socket.emit('point', [data[0]]);
                }
            });
            jQuery(window).mousemove(function( event ) {
              socket.emit('move', event.pageX + "," + event.pageY);
            });

            jQuery(document).keypress(function(e){
               jQuery('input#mensaje').focus();
               if(e.which == 13) {
                   socket.emit('mensaje', jQuery('input#mensaje').val());
                   jQuery('input#mensaje').val('');
               }
            });

            socket.on('mensaje', function(data){
                jQuery('[data-id="'+data[0]+'"]').find('.mensaje').text(data[1]);
            });

            socket.on('point', function(data){
                jQuery('.point').css({"top": data[2], "left": data[1]});
            });

            socket.on('updateMarcador', function(data){
                jQuery.each(data, function( index, value ) {
                    jQuery('[data-idmarcador="'+value[0]+'"]').html(value[1]+': <strong>'+value[3]+'</strong>');
                });

            });


            function collision($div1, $div2) {
                var x1 = $div1.offset().left;
                var y1 = $div1.offset().top;
                var h1 = $div1.outerHeight(true);
                var w1 = $div1.outerWidth(true);
                var b1 = y1 + h1;
                var r1 = x1 + w1;
                var x2 = $div2.offset().left;
                var y2 = $div2.offset().top;
                var h2 = $div2.outerHeight(true);
                var w2 = $div2.outerWidth(true);
                var b2 = y2 + h2;
                var r2 = x2 + w2;

                if (b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2) return false;
                return true;
              }
    </script>
</body>
</html>

<?php
//get_footer();
?>
