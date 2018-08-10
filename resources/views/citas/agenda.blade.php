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
              <label for="titulo">Titulo:</label>
              <input type="text" class="form-control" id="titulo" name="titulo"></input>
            </div>
            <div class="form-group">
              <label for="descripcion">Descripción:</label>
              <textarea rows="3" class="form-control" id="descripcion" name="descripcion"></textarea> 
            </div>
            <div class="form-group">
              <label for="fecha">Fecha:</label>
              <input type="text" class="form-control" id="fecha" name="fecha"></input>
            </div>
            <div class="form-group clockpicker">
              <label for="hora">Hora inicio:</label>
              <input type="text" class="form-control" id="horaInicio" name="horaInicio" readonly></input>
            </div>
            <div class="form-group clockpicker">
              <label for="hora">Hora final:</label>
              <input type="text" class="form-control" id="horaFinal" name="horaFinal" readonly></input>
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
            
            $('#id').val('');
            $('#titulo').val('');
            $('#descripcion').val('');
            $('#horaInicio').val('');
            $('#horaFinal').val('');
            $('#fecha').val(date.format());
            $('#modalCitas').modal();

          },
          eventClick: function(calEvent, jsEvent, view) {

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

    var nuevaCita;

    $('#btnAgregar').click(function(){

     nuevaCita = {
        title:$('#titulo').val(),
        start:$('#fecha').val()+" "+$('#horaInicio').val(),
        descripcion:$('#descripcion').val(),
        end:$('#fecha').val()+" "+$('#horaFinal').val(),
      };
    

      var titulo = $('#titulo').val();

      $('#id').val('');
      $('#titulo').val('');
      $('#fecha').val('');
      $('#descripcion').val('');
      $('#horaInicio').val('');
      $('#horaFinal').val('');

      $.ajax({

        type:"POST",
        url:"citas/store",
        data:{"_token": "{{csrf_token()}}","titulo":titulo},
        success: function(response){
          console.log(response);
        }

      });

      //$('#calendar').fullCalendar('renderEvent',nuevaCita);
      $('#modalCitas').modal('toggle');
    });

  </script>
@endsection