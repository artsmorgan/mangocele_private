jQuery.fn.reset = function () {
  $(this).each (function() { this.reset(); });
  $(this).find('textarea').text('');
}
function OnChange(dropdown)
    {
    	//console.log('OnChange');
        var myindex  = dropdown.selectedIndex;
        var SelValue = dropdown.options[myindex].value;
        var code, description;
        //alert(SelValue);
        //xajax_processModelRequest(SelValue);
        //return false;
        $.getJSON('../getModels.php?model=' + SelValue, function(data) {
        	//console.log(data);
        	//Populate Select
        	$('#modelo').empty();
        	//console.log(data['model'].length);
        	$('#modelo').append('<option value="*">Seleccione un Modelo</option>');

        	//description = data['model'][i]['@attributes']['description']
        	for(var i = 0; i < data['model'].length; i++){
        		code = data['model'][i]['@attributes']['code'];
        		description = data['model'][i]['@attributes']['description'];
        		//console.log(i + ' / ' + description);
        		$('#modelo').append('<option value="'+ description +'">'+ description +'</option>')
        	}
        })
    }
    $(".numeric").numeric();
jQuery(document).ready(function() {

			App.setPage('calendar');
			App.init(); // init the rest of plugins and elements
			//$('body>active').removeClass('active');
			//$('#addMoreSeguimiento').modal('show');
			$('#agregar_perfil').click(function(event){
				event.preventDefault();
				$('#add_profile').reset();
				$('#addMoreProfile').modal('show');
			}); 
			$('#agregar_profile').click(function(event){
				event.preventDefault();
				$(this).text('Enviando...').attr('disabled',true);
				createNewProfile();

			});
			$('#agregar_seguimiento_btn').click(function(event){
				//External btn to add a new seguimiento
				event.preventDefault();
				$('#add_seg_form').reset();
				$('.actionbtn').empty();
				$('.actionbtn').append('<a href="#" class="btn icn-only green" id="insert_seg">Agregar</a>');
				$('#addMoreSeguimiento').modal('show');

				$('#insert_seg').click(function(event){
					console.log('a');
					event.preventDefault();
					$(this).text('Enviando...').attr('disabled',true);
					createNewSeguimiento();

				});
			}); 
			
			

			for(i = 0; i < 31; i++){
				var dia = i+1;
				$('#dia-nac').append('<option value="'+dia+'">'+dia+'</option>');
			}
			var monthNames = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'];
			for(i = 0; i < monthNames.length; i++){
				var val = i+1;
				$('#mes-nac').append('<option value="'+val+'">'+monthNames[i]+'</option>');
			}
			//apend año
			var aInicio = 1925;
			var aActual = 2014;
			var arango = aActual - aInicio;
			for(i = 0; i < arango; i++){
				aInicio = 1925+i;
				$('#anno-nac, #desde_anno, #hasta_anno').prepend('<option value="'+aInicio+'">'+aInicio+'</option>');
			}
			$('#clientes').addClass('active');

			function ShowandHideSuccess(msg){
				$('#aler_message').html(msg)
				$('.success-update-user').show('fast', function(){
					setTimeout(function(){
						$('.success-update-user').fadeOut();
					}, 1000)
					});
			}

			$.ajax({
                  type: "POST",
                  //url: '#',
                  url: "../services/crmCommon.php",
                  data: {
                        act: 5,
                        uid: _uid
                  },
                  success: function(data) {
                  	//console.log(data);
                  	if(data['Cli_allow_sms'] == 1){
                  		//console.log('x')
                  		$('#allowSMS').attr('checked','checked');
                  		$('#allowSMS').parent().addClass('checked');
                  	}
                  	if(data['Cli_Estado'] == 1){
                  		//console.log('y')
                  		$('#activo').attr('checked','checked');
                  		$('#activo').parent().addClass('checked');
                  	}


                  	
                  	var fechanac = data['Cli_fechaNac'];
                  	if(fechanac.length > 2){
                  		var fecha_str = fechanac.split('-');
	                  	//console.log(fecha_str);
	                  	$('[name="dia-nac"]').val(fecha_str[0]);
	                  	$('[name="mess-nac"]').val(fecha_str[1]);
	                  	$('[name="anno-nac"]').val(fecha_str[2]);
                  	}else{
                  		$('[name="dia-nac"] , [name="mes-nac"], [name="anno-nac"]').prepend('<option> - </option>');
                  	};

                  	$('.ov_nombre_usuario').append(' <strong>' + data['Cli_Nombre']+'</strong>');
                  	$('.ov_apellido1').append(' <strong>' +data['Cli_Apellido1']+'</strong>');
                  	$('.ov_apellido2').append(' <strong>' +data['Cli_Apellido2']+'</strong>');
                  	$('.ov_direccion').append(' <strong>' +data['Cli_Direccion']+'</strong>');
                  	$('.ov_email').append(' <strong>' +data['Cli_Email']+'</strong>');
                  	$('.ov_pais').append(' <strong>' +data['Cli_Ciudad']+'</strong>');
                  	$('.ov_fecha').append(' <strong>' +data['Cli_FechaRegistro']+'</strong>');
                  	$('.ov_tel1').append(' <strong>' +data['Cli_Telefono1']+'</strong>');
                  	$('.ov_tel2').append(' <strong>' +data['Cli_Telefono2']+'</strong>');
                  	$('.ov_profesion').append(' <strong>' +data['Cli_Telefono1']+'</strong>');//Cli_Telefono1
                  	$('.ov_fecha_nac').append(' <strong>' +data['Cli_fechaNac']+'</strong>');//
                  	$('.ov_email_mailto').append(' <strong>' +data['Cli_Email']+'</strong>').attr('href', 'mailto:'+data['Cli_Email']);//
                  	/*********** Populate Forms element ***********/
                  	$('input[name="nombre"]').val(data['Cli_Nombre']);
                  	$('input[name="apellido1"]').val(data['Cli_Apellido1']);
                  	$('input[name="apellido2"]').val(data['Cli_Apellido2']);
                  	$('input[name="email"]').val(data['Cli_Email']);
                  	$('input[name="empresa"]').val(data['Cli_Empresa']);
                  	$('input[name="telefono1"]').val(data['Cli_Telefono1']);
                  	$('input[name="telefono2"]').val(data['Cli_Telefono2']);
                  	$('input[name="idnumber"]').val(data['Cli_Identificacion']);
                  	$('input[name="ciudad"]').val(data['Cli_Ciudad']);
                  	$('[name="profesion"]').val(data['Id_profesion']);
                  	$('[name="idtype"]').val(data['Id_TipoIdentificacion']);
                  	$('[name="pais"]').val(data['Id_Pais']);
                  	$('[name="estadoCivil"]').val(data['Id_EstadoCivil']);
                  	$('[name="direccion"]').html(data['Cli_Direccion']); 
                  	
                  	$('#submit_update').click(function(event){
                  		//event.preventDefault();
                  		$.ajax({
		                  type: "POST",
		                  //url: '#',
		                  url: "../services/crmCommon.php",
		                  data: {
		                        act: 6,
		                        uid: _uid,
		                        post_data: $('#update-form').serialize()
		                  },
		                  success: function(data) {
		                  	//console.log(data);
		                  	if(data == 1){
		                  		ShowandHideSuccess('Usuario actualizado con exito.');
		                  	}
		                  }
		                });  
                  	});
                  	$('#permisos_update').click(function(event){
                  		//console.log($('#permisos_form').serialize());
                  		//event.preventDefault();
                  		$.ajax({
		                  type: "POST",
		                  //url: '#',
		                  url: "../services/crmCommon.php",
		                  data: {
		                        act: 7,
		                        uid: _uid,
		                        post_data: $('#permisos_form').serialize()
		                  },
		                  success: function(data) {
		                  	console.log(data);
		                  	if(data == 1){
		                  		ShowandHideSuccess('Permisos Actualizados con exito.');
		                  	}
		                  }
		                });  
                  	});								
                  	
                  }
              });
			
			function clearFrom(form){
				$(form).reset();

			}
			function createNewProfile(){
				var from = $('#desde_anno').val();
				var to = $('#hasta_anno').val();
				var modelo = $('#modelo').val();
				var marca = $('#marca').val();
				if(from > to || modelo == '*' || marca == '*'){
					alert('Los datos ingresados son incorrectos, todos los campos son obligatorios.');
					$('#agregar_profile').text('Enviar').attr('disabled', false);
				}else{
					$.ajax({
		                  type: "POST",
		                  //url: '#',
		                  url: "../services/crmCommon.php",
		                  data: {
		                        act: 8,
		                        uid: _uid,
		                        post_data: $('#add_profile').serialize()
		                  },
		                  success: function(data) {
		                  	console.log(data);
		                  	if(data == 1){
		                  		ShowandHideSuccess('Perfil agregado con exito.');
		                  		$('#agregar_profile').text('Enviado');
		                  		$('#addMoreProfile').modal('hide');
		                  		retrieveProfilesbyCustomerId(_uid, '.ov_perfiles_result')

		                  	}
		                  }
		                });
				}
			}
			function createNewSeguimiento(){
				var presupuesto = $('#presupuesto').val();
				var notas = $('#notas').val();

				//console.log(presupuesto + ' / ' + notas);

				if(presupuesto == '' || notas == ''){
					alert('Los datos ingresados son incorrectos, todos los campos son obligatorios.');
					$('#insert_seg').text('Enviar').attr('disabled', false);
				}else{
					$.ajax({
		                  type: "POST",
		                  //url: '#',
		                  url: "../services/crmCommon.php",
		                  data: {
		                        act: 10,
		                        uid: _uid,
		                        post_data: $('#add_seg_form').serialize()
		                  },
		                  success: function(data) {
		                  	console.log(data);
		                  	if(data == 1){
		                  		ShowandHideSuccess('Seguimiento agregado con exito.');
		                  		$('#agregar_seg').text('Enviado');
		                  		$('#addMoreSeguimiento').modal('hide');
		                  		retrieveSeguimientosCustomerId(_uid);

		                  	}
		                  }
		                });
				}
			}

			function retrieveProfilesbyCustomerId(_uid, tableclass){
				var table  = $('.ov_perfiles_result');
				var transmision_ar = ['Manual', 'Automatica', 'ambas'];
				var traccion_ar = ['4x2', '4x4', 'ambas'];
				var carroceria_ar = ['Automovil', 'Motocicleta'];
				
				//
				table.empty();
				$.ajax({
		                  type: "POST",
		                  //url: '#',
		                  url: "../services/crmCommon.php",
		                  data: {
		                        act: 9,
		                        uid: _uid
		                  },
		                  success: function(_data) {

		                  	var data = _data;
		                  	//console.log(data);
		                  	
		                  	if(_data.length == 0){
		                  		table.append('<tr><td colspan="5"> No hay resultados que mostrar </td></tr>')
		                  	}else{
		                  		
		                  		$('#total_profiles').html(data.length);

		                  		//console.log(_data.length);

		                  		for(var i = 0; i < data.length; i++){
		                  			var transmision = data[i]['pe_transmision'];
				                  	var matchTrans = transmision_ar[transmision-1];

				                  	var traccion = data[i]['pe_traccion'];
				                  	var matchTraccion = traccion_ar[transmision-1];
				                  	
				                  	var carroceria = data[i]['pe_carroceria'];
				                  	var matchCarroceria = carroceria_ar[carroceria-1];

		                  			table.append('<tr><td>'+data[i]['pe_aInit']+'</td>'+
		                  				'<td>'+data[i]['pe_aFinish']+'</td>'+
		                  				'<td>'+matchCarroceria+'</td>'+
		                  				'<td>'+data[i]['pe_marca']+'</td>'+
		                  				'<td>'+data[i]['pe_modelo']+'</td>'+
		                  				'<td>'+matchTrans+'</td>'+
		                  				'<td>'+matchTraccion+'</td><td><a href="#" data-id="'+data[i]['id_perfil']+'" class="btn delete_profile"><i class="icon-trash"></i></a></td></tr>')
		                  		}
		                  	}
		                  }
		                });
			};
			retrieveProfilesbyCustomerId(_uid)

			function retrieveSeguimientosCustomerId(_uid, tableclass){
				var table  = $('.ov_seguimientos_result');
				var prioridad_ar = ['Alta', 'Media', 'Baja'];
				var estado_ar = ['Pendiente','En Progreso','Realizado', 'Rechazado'];
				var moneda_ar = ['$', 'C'];
				table.empty();
				$.ajax({
		                  type: "POST",
		                  //url: '#',
		                  url: "../services/crmCommon.php",
		                  data: {
		                        act: 11,
		                        uid: _uid
		                  },
		                  success: function(_data) {

		                  	var data = _data;
		                  	//console.log(data);
		                  	
		                  	if(_data.length == 0){
		                  		table.append('<tr><td colspan="5"> No hay resultados que mostrar </td></tr>')
		                  	}else{
		                  		
		                  		$('#total_profiles').html(data.length);

		                  		//console.log(_data.length);

		                  		for(var i = 0; i < data.length; i++){
		                  			var prioridad = data[i]['SegVentas_Prioridad'];
				                  	var prioridadMatch = prioridad_ar[prioridad-1];

				                  	var estado = data[i]['SegVentas_Estado'];
				                  	var estadoMatch = estado_ar[estado-1];
				                  	
				                  	var moneda = data[i]['segVentas_moneda'];
				                  	var monedaMatch = moneda_ar[moneda-1];

		                  			table.append('<tr><td>'+prioridadMatch+'</td>'+
		                  				'<td>'+data[i]['SegVentas_FechaRegistro']+'</td>'+
		                  				'<td>'+data[i]['SegVentas_Observaciones']+'</td>'+
		                  				'<td>'+monedaMatch + ' '+data[i]['SegVentas_Presupuesto']+'</td>'+
		                  				'<td>'+estadoMatch +'</td>'+
		                  				'<td><a href="#" data-id="'+data[i]['Id_SeguimientoVentas']+'" class="btn red delete_seg"><i class="icon-trash"></i> Eliminar</a>'+
		                  				' <a href="#" data-id="'+data[i]['Id_SeguimientoVentas']+'" class="btn edit_seg"><i class="icon-edit"></i> Editar</a>'+
		                  				'</td></tr>')
		                  		}

		                  		$('.edit_seg').click(function(){
		                  			var _sid = $(this).attr('data-id');
		                  			$.ajax({
					                  type: "POST",
					                  //url: '#',
					                  url: "../services/crmCommon.php",
					                  data: {
					                        act: 12,
					                        sid: _sid
					                  },
					                  success: function(_data_) {

					                  	event.preventDefault();
										$('#add_seg_form').reset();
										$('#agregar_seg').hide();
										$('.actionbtn').empty();
										$('.actionbtn').append('<a href="#" class="btn icn-only green" id="update_seg">Actualizar</a>');

										console.log(_data_)
										var formdata = _data_[0];
										$('#addMoreSeguimiento').modal('show');

										$('[name="prioridad"]').val(formdata['SegVentas_Prioridad']);
					                  	$('[name="estado"]').val(formdata['SegVentas_Estado']);
					                  	$('[name="moneda"]').val(formdata['segVentas_moneda']);
					                  	$('[name="presupuesto"]').val(formdata['SegVentas_Presupuesto']); 
					                  	$('#notas').html(formdata['SegVentas_Observaciones']); 

					                  	$('#update_seg').click(function(event){
					                  		event.preventDefault();
					                  		$(this).text('Enviando').attr('disabled', true);
					                  		$.ajax({
							                  type: "POST",
							                  //url: '#',
							                  url: "../services/crmCommon.php",
							                  data: {
							                        act: 13,
							                        sid: _sid,
							                        post_data: $('#add_seg_form').serialize()
							                  },
							                  success: function(data) {
							                  	if(data == 1){
								                  	ShowandHideSuccess('Seguimiento actualizado con exito.');
							                  		$('#update_seg').text('Enviado');
							                  		$('#addMoreSeguimiento').modal('hide');
							                  		retrieveSeguimientosCustomerId(_uid)
							                  	}	
							                  }
							                });  
					                  	})
					                  }
					                });  
		                  		})
		                  	}
		                  }
		                });
			};
			retrieveSeguimientosCustomerId(_uid)



            function getCountCotizacionesPendientes(_uid){
                $.ajax({
                    type: "POST",
                    //url: '#',
                    url: "../services/crmCommon.php",
                    data: {
                        act: 36,
                        uid: _uid
                    },
                    success: function(_data_) {
                        //console.log(_data_);
                        $('#ov_cot_pendientes').html(_data_[0]['count(*)']);
                    }
                })
            }getCountCotizacionesPendientes(_uid)

            function getCountCotizacionesRealizadas(_uid){
                $.ajax({
                    type: "POST",
                    //url: '#',
                    url: "../services/crmCommon.php",
                    data: {
                        act: 37,
                        uid: _uid
                    },
                    success: function(_data_) {
                        //console.log(_data_);
                        $('#ov_cot_realizadas').html(_data_[0]['count(*)']);
                    }
                })
            }getCountCotizacionesRealizadas(_uid);


        function getCotizacionesPendientesByUserId(_uid){
            $.ajax({
                type: "POST",
                //url: '#',
                url: "../services/crmCommon.php",
                data: {
                    act: 38,
                    uid: _uid
                },
                success: function(data) {
                    var target = $('#ov_cots_pend_result');
                    //console.log(data);
                    if(data.length>0){
                         for(var i = 0; i < data.length; i++){
                             target.append('<tr>' +
                                 '<td>'+data[i]['pc_lote']+'</td>' +
                                 '<td>'+data[i]['pc_marca']+ ' > ' + data[i]['pc_modelo'] + ' > ' + data[i]['pc_anno'] +'</td>' +
                                 '<td>'+data[i]['pc_fecha_cotizacion']+'</td>' +
                                 '<td><a href="cotizacion.php?setCot='+data[i]['id_precotizacion']+'" class="btn blue">Cotizar</a></td>' +
                                 '</tr>')
                         }
                    }else{
                        target.html('<tr><td>No hay resultados</td></tr>')
                    }
                    //$('#ov_cot_realizadas').html(_data_[0]['count(*)']);
                }
            })
        }getCotizacionesPendientesByUserId(_uid);


    function getCotizacionesRealizadasByUserId(_uid){
        $.ajax({
            type: "POST",
            //url: '#',
            url: "../services/crmCommon.php",
            data: {
                act: 39,
                uid: _uid
            },
            success: function(data) {
                var target = $('#ov_cots_result');
                console.log(data);
                if(data.length>0){
                    for(var i = 0; i < data.length; i++){
                        target.append('<tr>' +
                            '<td>'+data[i]['cot_lote']+'</td>' +
                            '<td>'+data[i]['cot_marca']+ ' > ' + data[i]['cot_modelo'] + ' > ' + data[i]['cot_anno'] +'</td>' +
                            '<td>'+data[i]['cot_fechaSubasta']+'</td>' +
                            '<td><a href="cotizacion-mod.php?setCot='+data[i]['id_Cot']+'" class="btn blue">Ver / Editar</a></td>' +
                            '</tr>')
                    }
                }else{
                    target.html('<tr><td>No hay resultados</td></tr>')
                }
                //$('#ov_cot_realizadas').html(_data_[0]['count(*)']);
            }
        })
    }getCotizacionesRealizadasByUserId(_uid);


});