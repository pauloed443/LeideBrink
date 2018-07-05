@extends('layouts.app')

@section('content')
    <div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-md-offset-6 col-md-6 text-right">
                        <div id="calendario"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="cal_mensagem" class="modal fade" role="dialog" aria-labelledby="mensagemLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header modal-header-info">
                        <div class="text-center">
                            <span>Evento</span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <span id="mensagemLabel">&nbsp;</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')

    <script>
        $(document).ready(function () {

            function clicouDia(date, jsEvent, view) {
                console.log('date', date.format('DD/MM/YYYY HH:mm'));
                console.log('jsEvent', jsEvent);
                console.log('view', view);
                if ($(this).css('background-color') === 'transparent') {
                    $(this).css('background-color', 'red');
                    $('#mensagemLabel').text('Data: ' + date.format('DD/MM/YYYY HH:mm'));
                    $('#cal_mensagem').modal();
                } else {
                    $(this).css('background-color', 'transparent');
                }
            }

            function clicouEvento(calEvent, jsEvent, view) {
                console.log('calEvent', calEvent);
                console.log('jsEvent', jsEvent);
                console.log('view', view);
                $('#mensagemLabel').text(calEvent.title + ' ' + (calEvent.id | ' ') + ' ' + calEvent.start.format('DD/MM/YYYY HH:mm'));
                $('#cal_mensagem').modal();
            }

            $('#calendario').fullCalendar({
                // put your options and callbacks here
                lang: 'pt-br',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                timeFormat: 'HH:mm',
                dayClick: clicouDia,
                eventClick: clicouEvento,

                events: [
                    {
                        title: 'All Day Event',
                        start: '2016-10-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2016-10-07',
                        end: '2016-10-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-10-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-10-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2016-10-11',
                        end: '2016-10-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-10-12T10:30:00',
                        end: '2016-10-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2016-10-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-10-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2016-10-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2016-10-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2016-10-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2016-10-28'
                    }
                ]
            })

        });
    </script>

@endsection