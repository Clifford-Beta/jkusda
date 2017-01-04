
<script type="text/javascript">
	$(document).ready(function() {
 var today_date = moment().format('YYYY-MM-DD');
if (typeof(Storage) !== "undefined") {
    // Code for localStorage/sessionStorage.
    $.post("http://52.89.75.169/event",
        {
          
         
        },
        function(data,status){
          if(data.status){
            // 
            sessionStorage.setItem("myEvents", JSON.stringify(data['message'])); 
          }
            // console.log(data, events)

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
   $.post("http://52.89.75.169/event",
        {
          
         
        },
        function(data,status){
          if(data.status){
            callback(data['message']);
          }
            // console.log(data, events)

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

  // console.log(moment().format('W'));
});

	

</script>
</html>
