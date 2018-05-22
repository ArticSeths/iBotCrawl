jQuery(document).ready(function() {

	//Iniciamos chequeo de cookies checkCookiesMain()
	checkCookiesMain();
	loadCadenasMenu();
	jQuery('.btn-toggle-fullwidth').on('click', function() {
		if(!jQuery('body').hasClass('layout-fullwidth')) {
			jQuery('body').addClass('layout-fullwidth');

		} else {
			jQuery('body').removeClass('layout-fullwidth');
			jQuery('body').removeClass('layout-default');
		}

		jQuery(this).find('.lnr').toggleClass('lnr-arrow-left-circle lnr-arrow-right-circle');

		if(jQuery(window).innerWidth() < 1025) {
			if(!jQuery('body').hasClass('offcanvas-active')) {
				jQuery('body').addClass('offcanvas-active');
			} else {
				jQuery('body').removeClass('offcanvas-active');
			}
		}

	});

	jQuery(window).on('load', function() {
		jQuery('.right-sidebar').css('top', jQuery('.navbar').innerHeight());

		if(jQuery('.has-content-menu').length > 0) {
			jQuery('.navbar + .main-content').css('padding-top', jQuery('.navbar').innerHeight());
		}

		if(jQuery('.main').height() < jQuery('#sidebar-nav').height()) {
			jQuery('.main').css('min-height', jQuery('#sidebar-nav').height());
		}
	});


	jQuery('.sidebar a[data-toggle="collapse"]').on('click', function() {
		if(jQuery(this).hasClass('collapsed')) {
			jQuery(this).addClass('active');
		} else {
			jQuery(this).removeClass('active');
		}
	});

	if( jQuery('.sidebar-scroll').length > 0 ) {
		jQuery('.sidebar-scroll').slimScroll({
			height: '95%',
			wheelStep: 10,
		});
	}

	jQuery('.panel .btn-remove').click(function(e){

		e.preventDefault();
		jQuery(this).parents('.panel').fadeOut(300, function(){
			jQuery(this).remove();
		});
	});

	var affectedElement = jQuery('.panel-body');

	jQuery('.panel .btn-toggle-collapse').clickToggle(
		function(e) {
			e.preventDefault();
			if( jQuery(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
				affectedElement = jQuery('.slimScrollDiv');
			}

			jQuery(this).parents('.panel').find(affectedElement).slideUp(300);
			jQuery(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
		},
		function(e) {
			e.preventDefault();
			if( jQuery(this).parents('.panel').find('.slimScrollDiv').length > 0 ) {
				affectedElement = jQuery('.slimScrollDiv');
			}

			jQuery(this).parents('.panel').find(affectedElement).slideDown(300);
			jQuery(this).find('i.lnr-chevron-up').toggleClass('lnr-chevron-down');
		}
	);

	jQuery('.todo-list input').change( function() {
		if( jQuery(this).prop('checked') ) {
			jQuery(this).parents('li').addClass('completed');
		}else {
			jQuery(this).parents('li').removeClass('completed');
		}
	});


	jQuery('.nav-toggle-arrow,.nav.radio-ico a').on('click', function() {
		jQuery('.nav-toggle-arrow').toggleClass('open');
		jQuery('body').toggleClass('layout-fullwidth');
	});

	jQuery(document).on('mainFiltersCookieUpdate', function(){
			checkCookiesMain();
			loadCadenasMenu();
	});

	jQuery('.selectpicker#selectCadenas').on('change', function(){
		var mainFilters = JSON.parse(Tools.readCookie('mainFilters'));
	  var id_cadena = jQuery(this).val();
		var cadena = jQuery('#selectCadenas option[value="'+ jQuery(this).val()+'"]').text();
		var nacional = jQuery('#selectCadenas option[value="'+jQuery('#selectCadenas').val()+'"]').data('nacional')
		mainFilters.id_cadena = id_cadena;
		if(id_cadena != '-99'){
			mainFilters.cadena = cadena;
		}else{
			mainFilters.cadena = 'null';
		}
		mainFilters.id_emisora = '-99';
		mainFilters.id_emisora_nacional = nacional;

		datos = JSON.stringify(mainFilters);
		Tools.createCookie('mainFilters', datos, 15);

		if(mainFilters.id_emisora != '-99'){
			changeCadena(id_cadena, mainFilters.id_emisora);
		}else{
			changeCadena(id_cadena);
		}
	});

	jQuery('.selectpicker#selectEmisoras').on('change', function(){
		var mainFilters = JSON.parse(Tools.readCookie('mainFilters'));
		var id_emisora = jQuery(this).val();
		mainFilters.id_emisora = id_emisora;
		var emisora = jQuery('#selectEmisoras option[value="'+id_emisora+'"]').text();
		if(id_emisora != '-99'){
			mainFilters.emisora = emisora;
		}else{
			mainFilters.emisora = 'null';
		}
		datos = JSON.stringify(mainFilters);
		Tools.createCookie('mainFilters', datos, 15);
	});

});




jQuery.fn.clickToggle = function( f1, f2 ) {
	return this.each( function() {
		var clicked = false;
		jQuery(this).bind('click', function() {
			if(clicked) {
				clicked = false;
				return f2.apply(this, arguments);
			}

			clicked = true;
			return f1.apply(this, arguments);
		});
	});

}

function validateEmail(sEmail) {
	var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if (filter.test(sEmail)) {
		return true;
	}else{
		return false;
	}
}

var Tools = {
		createCookie: function(name, value,days) {
			if (days) {
				var date = new Date();
				date.setTime(date.getTime()+(days*24*60*60*1000));
				var expires = "; expires="+date.toGMTString();
			}else{
				var expires = "";
			}
			document.cookie = name+"="+value+expires+"; path=/";
			if(name == 'mainFilters'){
				jQuery(document).trigger('mainFiltersCookieUpdate');
			}
		},

		createCookieMinutes: function(name, value,minutes) {
			if (minutes) {
				var date = new Date();
				date.setTime(date.getTime()+(minutes*60*1000));
				var expires = "; expires="+date.toGMTString();
			}else{
				var expires = "";
			}
			document.cookie = name+"="+value+expires+"; path=/";
			if(name == 'mainFilters'){
				jQuery(document).trigger('mainFiltersCookieUpdate');
			}

		},

		readCookie: function(name) {
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for(var i=0;i < ca.length;i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') c = c.substring(1,c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
			}
			return null;
		},

		eraseCookie: function(name) {
			Tools.createCookie(name,"",-1);
		}
	};

// Creamos las main cookies para los filtros
function checkCookiesMain() {
	if(!Tools.readCookie('mainFilters')){
			var fecha = new Date();
			var fechaActual = fecha.toISOString().slice(0,10);
			fecha.setDate(fecha.getDate() -7);
			var fechaMenor = fecha.toISOString().slice(0,10);

			var datos = {};
			datos.id_cadena = '-99';
			datos.cadena = 'null';
			datos.id_emisora = '-99';
			datos.id_emisora_nacional = '-99';
			datos.emisora = 'null';
			datos.id_planilla_tcm = '-99';
			datos.fecha_inicio = fechaMenor;
			datos.fecha_fin = fechaActual;

			datos = JSON.stringify(datos);
			Tools.createCookie('mainFilters', datos, 15);
		}else{
			var main = JSON.parse(Tools.readCookie('mainFilters'));
			var flag = false;
			if(!main.id_cadena){
				main.id_cadena = '-99';
				flag = true;
			}
			if(!main.cadena){
				main.cadena = 'null';
				flag = true;
			}
			if(!main.id_emisora){
				main.id_emisora = '-99';
				flag = true;
			}
			if(!main.id_emisora_nacional){
				main.id_emisora_nacional = '-99';
				flag = true;
			}
			if(!main.emisora){
				main.emisora = 'null';
				flag = true;
			}
			if(!main.id_planilla_tcm){
				main.id_planilla_tcm = '-99';
				flag = true;
			}
			var fecha = new Date();
			if(!main.fecha_fin){
				var fechaActual = fecha.toISOString().slice(0,10);
				main.fecha_fin = fechaActual;
				flag = true;
			}
			if(!main.fecha_inicio){
				fecha.setDate(fecha.getDate() -7);
				var fechaMenor = fecha.toISOString().slice(0,10);
				main.fecha_inicio = fechaMenor;
				flag = true;
			}

			if(flag){
				datos = JSON.stringify(main);
				Tools.createCookie('mainFilters', datos, 15);
			}
		}
}

function loadCadenasMenu() {
	var mainFilters = JSON.parse(Tools.readCookie('mainFilters'));

	jQuery.post("/ajax/x_gestionar_usuarios.php", {
		type: "POST",
		dataType: 'text',
		action: 'loadCadenas'
	}, function (data) {
		var cadenas = JSON.parse(data);
		var html = '<option value="-99">Selecciona una cadena</option>';
		jQuery.each(cadenas, function(index, value){
			html += '<option value="'+value.ID+'" data-nacional="'+value.ID_nacional+'" data-content="<img src=\''+value.Imagen+'\' style=\'width: 40px;\'> '+value.Nombre+'">'+value.Nombre+'</option>';
		});
		jQuery('.selectpicker#selectCadenas').html(html);
		if(mainFilters.id_cadena != '-99'){
			jQuery('.selectpicker#selectCadenas').val(mainFilters.id_cadena);
		}
		jQuery('.selectpicker#selectCadenas').selectpicker('refresh');
		if(mainFilters.id_emisora != '-99'){
			changeCadena(mainFilters.id_cadena, mainFilters.id_emisora);
		}else{
			changeCadena(mainFilters.id_cadena);
		}
	});
}

function changeCadena(id_cadena, id_emisora){
	jQuery.post("/ajax/x_gestionar_usuarios.php", {
		type: "POST",
		dataType: 'text',
		action: 'loadEmisoras',
		offset0: id_cadena
	}, function (data) {
		var emisoras = JSON.parse(data)[0];
		if(emisoras){
			var html = '<option value="-99">Selecciona una emisora</option>';
			jQuery.each(emisoras, function(index, value){
				html += '<option value="'+value.ID+'" data-content="'+value.Nombre+'">'+value.Nombre+'</option>';
			});
			jQuery('.selectpicker#selectEmisoras').html(html);
			if(id_emisora){
				jQuery('.selectpicker#selectEmisoras').val(id_emisora);
			}
			jQuery('.selectpicker#selectEmisoras').selectpicker('refresh');
		}else{
			var html = '<option value="-99">No hay emisoras disponibles</option>';
			jQuery('.selectpicker#selectEmisoras').html(html);
			jQuery('.selectpicker#selectEmisoras').selectpicker('refresh');
		}
	});
}
function fadeInSuccessive(selector, t) {
	var items = jQuery(selector);
	var index = 0;

	function next() {
		if (index < items.length) {
			items.eq(index++).fadeIn(t*4);
			setTimeout(next, t);
		}
	}
	next();
}

function fadeOutSuccessive(selector, t) {
	var items = jQuery(selector);
	var index = items.length;

	function next() {
		if (index > 0) {
			items.eq(index=index-1).fadeOut(t*4);
			setTimeout(next, t);
		}
	}
	next();
}

function swalLoading(){
	var html = '<div class="indicator">';
	html += '<svg viewBox="0 0 127.6 127.6" style="width: 125px;">';
	html += '<path id="back" d="M113.3,32.5v62.6c0,9.8-8.1,17.9-17.9,17.9H32.2c-4.2,0-8.2-1.5-11.2-4c-4.1-3.3-6.7-8.3-6.7-13.9 V32.5c0-9.9,8.1-17.9,17.9-17.9h63.2c3.1,0,6,0.8,8.5,2.2C109.5,19.7,113.3,25.7,113.3,32.5z"/>';
	html += '<path id="back" d="M46.3,81c0,0,0.6,3.6,4.8,2.4l29.5-17.3c0,0,3.2-3-0.8-5.7l-29-16.5c0,0-3.7-2-4.5,2.1L46.3,81z"/>';

	html += '<path id="front" d="M113.3,32.5v62.6c0,9.8-8.1,17.9-17.9,17.9H32.2c-4.2,0-8.2-1.5-11.2-4c-4.1-3.3-6.7-8.3-6.7-13.9	V32.5c0-9.9,8.1-17.9,17.9-17.9h63.2c3.1,0,6,0.8,8.5,2.2C109.5,19.7,113.3,25.7,113.3,32.5z"/>';
	html += '<path id="front" d="M46.3,81c0,0,0.6,3.6,4.8,2.4l29.5-17.3c0,0,3.2-3-0.8-5.7l-29-16.5c0,0-3.7-2-4.5,2.1L46.3,81z"/>';
	html += '</svg>';
	html += '</div>';
	swal({
		title: '',
		text: html,
		html: true,
		showConfirmButton: false,
		customClass: 'swalLoading',
		allowEscapeKey:false
	});
}

Number.prototype.formatMoney = function(c, d, t){
	var n = this,
	c = isNaN(c = Math.abs(c)) ? 2 : c,
	d = d == undefined ? "." : d,
	t = t == undefined ? "," : t,
	s = n < 0 ? "-" : "",
	i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
	j = (j = i.length) > 3 ? j % 3 : 0;
	return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

String.prototype.formatWeek = function(){
	switch (this.toString()) {
		case 'Lunes':
		return 0;
		break;
		case 'Martes':
		return 1;
		break;
		case 'Miercoles':
		return 2;
		break;
		case 'Jueves':
		return 3;
		break;
		case 'Viernes':
		return 4;
		break;
		case 'Sabado':
		return 5;
		break;
		case 'Domingo':
		return 6;
		break;
		default:
		return;
		break;
	}
};

Object.size = function(obj) {
	var size = 0, key;
	for (key in obj) {
		if (obj.hasOwnProperty(key)) size++;
	}
	return size;
};


// RANGO DE COLORES
// Modo de uso:
//
// var red = new GColor(92, 157, 255);
// var blue = new GColor(0, 78, 195);
// var range = createColorRange(red, blue, 20);

var GColor = function(r,g,b) {
	r = (typeof r === 'undefined')?0:r;
	g = (typeof g === 'undefined')?0:g;
	b = (typeof b === 'undefined')?0:b;
	return {r:r, g:g, b:b};
};
var createColorRange = function(c1, c2, num = 255) {
	var ColorList = [], tmpColor;
	for (var i=0; i<num; i++) {
		tmpColor = new GColor();
		tmpColor.r = Math.trunc(c1.r + ((i*(c2.r-c1.r))/num));
		tmpColor.g = Math.trunc(c1.g + ((i*(c2.g-c1.g))/num));
		tmpColor.b = Math.trunc(c1.b + ((i*(c2.b-c1.b))/num));
		ColorList.push(tmpColor);
	}
	return ColorList;
}

function swalClose(){
	swal.close();
}


function acortarText(val, length = 5, end = ''){
	var regex = new RegExp("(.{"+(length-3)+","+(length-3)+"})(.{3,})("+end+")");
	return val.replace(regex, "$1...$3");
}

var timeout;
function checkDNI(DNI, obj) {
  clearTimeout(timeout);
  DNI = DNI.toUpperCase();
  DNI = DNI.replace(/[^A-Z0-9]/g, '');
  if (DNI.length >= 8) {
    timeout = setTimeout(function () {
	    var ajaxurl = "/ajax/x_funciones_globales.php";
	    jQuery.post(ajaxurl, {
	      type: "POST",
	      dataType: 'text',
	      action: 'check_dni',
	      offset0: DNI,
	    }, function (data) {
	      if (data != '1') {
          jQuery(obj).css('border-color', 'red');
					jQuery(obj).attr('data-validDNI', 'false');
	      } else {
          jQuery(obj).css('border-color', '#3c763d');
					jQuery(obj).attr('data-validDNI', 'true');
	      }
	    });
    }, 500);
  } else {
      jQuery(obj).css('border-color', 'red');
			jQuery(obj).attr('data-validDNI', 'false');
  }
}
