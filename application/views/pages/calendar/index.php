<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.0/fullcalendar.css' />
<script src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.0/fullcalendar.min.js'></script>
</head>
<body>
<div id='calendar'></div>

</body>
<script type="text/javascript">
	$(document).ready(function() {
  // page is ready

  $('#calendar').fullCalendar({
      // calendar properties
      // theme: true,
// emphasizes business hours
businessHours: true,
// event dragging & resizing
editable: true,
// header
header: {
  left: 'prev,next today',
  center: 'title',
  right: 'month,agendaWeek,agendaDay'
},

events: function (start, end, timezone, callback) {
    $.ajax({
        type: "get",
        url: 'http://52.89.75.169/event',
        dataType: 'jsonp',
        contentType: 'application/json',
        success: function (data) {
        	if(data.status){
            callback(data['message']);}
            // console.log(data, events)
        }

    }).fail(function (jqXHR) {
        console.log("Failed");
    });
}
  })
});

	

</script>
</html>


