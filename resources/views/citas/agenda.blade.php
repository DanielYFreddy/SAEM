@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div id='calendar'></div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalCitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tituloModal">Control de citas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="form_id">
            <div class="form-group">
              <label for="id">Id:</label>
              <input type="text" class="form-control" id="id" name="id"></input>
            </div>
            <div class="form-group">
              <label for="titulo">Paciente:</label>
              <input type="text" class="form-control" id="titulo" name="titulo" autocomplete="off"></input>
              <div id="listaPacientes" style="z-index:99"></div>
              <div class="invalid-feedback invalid-titulo">
                
              </div>
            </div>
            <div class="form-group">
              <label for="descripcion">Descripción:</label>
              <textarea rows="3" class="form-control" id="descripcion" name="descripcion"></textarea>
              <div class="invalid-feedback invalid-descripcion">
                
              </div> 
            </div>
            <div class="form-group">
              <label for="fecha">Fecha:</label>
              <input type="text" class="form-control" id="fecha" name="fecha" readonly></input>
            </div>
            <div class="form-group clockpicker">
              <label for="hora">Hora inicio:</label>
              <input type="text" class="form-control" id="horaInicio" name="horaInicio" readonly></input>
              <div class="invalid-feedback invalid-horaInicio">
                
              </div>
            </div>
            <div class="form-group clockpicker">
              <label for="hora">Hora final:</label>
              <input type="text" class="form-control" id="horaFinal" name="horaFinal" readonly></input>
              <div class="invalid-feedback invalid-horaFinal">
                
              </div>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnAgregar" class="btn btn-primary">Agregar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
  <script>
    $(document).ready(function(){
      $('#calendar').fullCalendar({
          themeSystem: 'bootstrap4',
          header:{
            left:   'today prev,next',
            center: 'title',
            right:  'month,agendaWeek,agendaDay'
          },
          height: 500,
          contentHeight: 500,
          prev: 'fas fa-chevron-left',
          next: 'fas fa-chevron-right',

          events: 'citas',

          dayClick: function(date, jsEvent, view) {

            $('#listaPacientes').fadeOut();
            
            $("#titulo").removeClass("is-invalid");
            $(".invalid-titulo").empty();

            $("#descripcion").removeClass("is-invalid");
            $(".invalid-descripcion").empty();  
            
            $("#horaInicio").removeClass("is-invalid");
            $(".invalid-horaInicio").empty();       

            $("#horaFinal").removeClass("is-invalid");
            $(".invalid-horaFinal").empty();   

            $('#id').val('');
            $('#titulo').val('');
            $('#descripcion').val('');
            $('#horaInicio').val('');
            $('#horaFinal').val('');
            $('#fecha').val(date.format());

            $('#modalCitas').modal();

          },
          eventClick: function(calEvent, jsEvent, view) {

            $('#listaPacientes').fadeOut();

            $("#titulo").removeClass("is-invalid");
            $(".invalid-titulo").empty();

            $("#descripcion").removeClass("is-invalid");
            $(".invalid-descripcion").empty();  
            
            $("#horaInicio").removeClass("is-invalid");
            $(".invalid-horaInicio").empty();       

            $("#horaFinal").removeClass("is-invalid");
            $(".invalid-horaFinal").empty(); 

            $('#id').val(calEvent.id);
            $('#titulo').val(calEvent.title);
            $('#descripcion').val(calEvent.descripcion);

            fechaHoraInicio = calEvent.start._i.split(" ");
            fechaHoraFinal = calEvent.end._i.split(" ");

            $('#fecha').val(fechaHoraInicio[0]);
            $('#horaInicio').val(fechaHoraInicio[1]);

            $('#horaFinal').val(fechaHoraFinal[1]);

            $('#modalCitas').modal();

          }

      });
    }); 

    $('.clockpicker').clockpicker({
        placement: 'top',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    $('#titulo').keyup(function(){
      var nombrePaciente = $(this).val();
      if (nombrePaciente != '') {
        $.ajax({

          type:"POST",
          url:"citas/buscarPaciente",
          data:{"_token": "{{csrf_token()}}","nombrePaciente":nombrePaciente,},
          success: function(response){
            $('#listaPacientes').fadeIn();
            $('#listaPacientes').html(response);
          }

        });
      }
    });

    $(document).on('click', '.seleccionar-paciente', function(){
      $('#titulo').val($(this).text());
      $('#listaPacientes').fadeOut();
    });

    $(document).mouseup(function(e)
    {
        // cambia este selector para adaptarlo al <div> de tu código HTML
        var container = $("#listaPacientes");
     
        // esta condición comprueba que el destino del click no sea el propio
        // contenedor ni ninguno de sus desdendientes (es decir, los enlaces que
        // están dentro del <div>)
        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            container.hide();
        }
    });


    $('#btnAgregar').click(function(){    


      if($('#id').val() !== '')
      {
        console.log("No se puede agregar");
        return false;
      }     

      if($('#titulo').val() == '')
      {
        $("#titulo").addClass("is-invalid");
        $(".invalid-titulo").html("El titulo es requerido");
        return false;
      }
      else
      {
        $("#titulo").removeClass("is-invalid");
        $(".invalid-titulo").empty();
      }

      if($('#descripcion').val() == '')
      {
        $("#descripcion").addClass("is-invalid");
        $(".invalid-descripcion").html("La descripcion es requerida");
        return false;
      }
      else
      {
        $("#descripcion").removeClass("is-invalid");
        $(".invalid-descripcion").empty();
      }      

      if($('#horaInicio').val() == '')
      {
        $("#horaInicio").addClass("is-invalid");
        $(".invalid-horaInicio").html("La hora de inicio es requerida");
        return false;
      }
      else
      {
        $("#horaInicio").removeClass("is-invalid");
        $(".invalid-horaInicio").empty();
      }  

      if($('#horaFinal').val() == '')
      {
        $("#horaFinal").addClass("is-invalid");
        $(".invalid-horaFinal").html("La hora final es requerida");
        return false;
      }
      else
      {
        $("#horaFinal").removeClass("is-invalid");
        $(".invalid-horaFinal").empty();
      }  

      var title = $('#titulo').val();
      var start = $('#fecha').val()+" "+$('#horaInicio').val();
      var descripcion = $('#descripcion').val();
      var end = $('#fecha').val()+" "+$('#horaFinal').val();

      $('#id').val('');
      $('#titulo').val('');
      $('#fecha').val('');
      $('#descripcion').val('');
      $('#horaInicio').val('');
      $('#horaFinal').val('');

      $.ajax({

        type:"POST",
        url:"citas/store",
        data:{"_token": "{{csrf_token()}}","title":title,"start":start,"descripcion":descripcion,"end":end,},
        success: function(response){
          if(response.msg){
            $('#calendar').fullCalendar('refetchEvents');
            $('#modalCitas').modal('toggle');
            swal({
              title: "Cita Registrada",
              text: "La cita del paciente ha sido registrada",
              type: "success",
            })
          }
        },
        error: function(){
            swal({
              title: "Error",
              text: "Oops ha ocurrido un error. Revisa la información antes de guardarla.",
              type: "warning",
            })
        }

      });
    });

  </script>
@endsection