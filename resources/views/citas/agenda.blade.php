@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div id='calendar'></div>
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

      });
    });   
  </script>
@endsection