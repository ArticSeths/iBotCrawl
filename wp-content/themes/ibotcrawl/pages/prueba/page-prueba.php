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
</head>
<body>
    <style media="screen">
        html{
          cursor: none;
        }
        .pj{
            width: 50px;
            height: 50px;
            background: black;
            position: relative;
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
            });

            socket.on('disconnectedUser', function(data){
                jQuery('[data-id="'+data+'"]').remove();
            });

            socket.on('checkUsers', function(data){
                jQuery.each(data, function( index, value ) {
                  if(!jQuery('[data-id="'+value[0]+'"]').length){
                      var html = '<div style="width: 25px; height: 25px;background: '+value[2]+';position: absolute;" data-id="'+value[0]+'">'+value[1]+'</div>';
                      jQuery('body').append(html);
                  }
                });
            });

            socket.on('saveName', function(data){
                jQuery('[data-id="'+data[0]+'"]').text(data[1]);
                jQuery('[data-id="'+data[0]+'"]').css('background', data[2]);
            });

            socket.on('move', function(data){
                var pos = data[1].split(",");
                var posx = pos[0]+'px';
                var posy = pos[1]+'px';
                jQuery('[data-id="'+data[0]+'"]').css({"top": posy, "left": posx});
            });
            jQuery(window).mousemove(function( event ) {
              socket.emit('move', event.pageX + "," + event.pageY);
            });
    </script>
</body>
</html>

<?php
//get_footer();
?>
