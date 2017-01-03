
<script type="text/javascript">
	$(document).ready(function() {
 var today_date = moment().format('YYYY-MM-DD');
if (typeof(Storage) !== "undefined") {
    // Code for localStorage/sessionStorage.
    $.ajax({
        type: "post",
        url: 'http://52.89.75.169/event',
        data: {},
        dataType: 'jsonp',
        contentType: 'application/json',
        success: function (data) {
          if(data.status){
            // 
            sessionStorage.setItem("myEvents", JSON.stringify(data['message'])); 
          }
            // console.log(data, events)
        }

    }).fail(function (jqXHR) {
        console.log("Failed");
    });
} 


  $('#calendar').fullCalendar({
      // calendar properties
      // theme: true,
// emphasizes business hours
businessHours: true,
editable: false,
header: {
  left: 'prev,next today',
  center: 'title',
  right: 'month,agendaWeek,agendaDay'
},
eventLimit: true,

events: function (start, end, timezone, callback) {
  if (sessionStorage.getItem("myEvents")) {
    // console.log()
  callback(JSON.parse(sessionStorage.getItem("myEvents")));
}else{
  $.ajax({
        type: "post",
        url: 'http://52.89.75.169/event',
        data: {},
        dataType: 'jsonp',
        contentType: 'application/json',
        success: function (data) {
          if(data.status){
            callback(data['message']);
          }
            // console.log(data, events)
        }

    }).fail(function (jqXHR) {
        console.log("Failed");
    });
}
  
  
  
},
eventColor: '#bababa',
eventRender: function (event, element) {
                        element.attr('href', 'javascript:void(0);');
                        element.click(function() {
                            bootbox.alert({
                                  message: 'Description : '+event.description,
                                  title: event.title,
                            });
                        });
                    }

  })
});

	

</script>
</html>
