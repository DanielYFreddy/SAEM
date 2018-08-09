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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="titulo">Titulo:</label>
              <input type="text" class="form-control" id="titulo"></input>
            </div>
            <div class="form-group">
              <label for="descripcion">Descripción:</label>
              <input type="text" class="form-control" id="descripcion"></input>
            </div>
            <div class="form-group">
              <label for="fecha">Fecha:</label>
              <input type="text" class="form-control" id="fecha"></input>
            </div>
            <div class="form-group">
              <label for="hora">Hora:</label>
              <input type="text" class="form-control" id="hora"></input>
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

          events: [
            {
              title  : 'event1',
              start  : '2018-08-01'
            },
            {
              title  : 'event2',
              start  : '2018-08-05',
              end    : '2018-08-07'
            },
            {
              title  : 'event3',
              start  : '2018-08-09T12:30:00',
              allDay : false // will make the time show
            }
          ],

          dayClick: function(date, jsEvent, view) {

            $('#fecha').val(date.format())
            $('#modalCitas').modal();

          }

      });
    }); 


          var nuevaCita;

    $('#btnAgregar').click(function(){

     nuevaCita = {
        title:$('#titulo').val(),
        start:$('#fecha').val()+" "+$('#hora').val(),
        descripcion:$('#descripcion').val(),
      };
      alert(nuevaCita.start);
      $('#calendar').fullCalendar('renderEvent',nuevaCita);
      $('#modalCitas').modal('toggle');
    });
  </script>
@endsection