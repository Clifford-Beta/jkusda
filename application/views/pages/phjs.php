<script type="text/javascript">
	
function getmyEvents(){
	var mydata = {}
	$.post("http://52.89.75.169/event",
        {
          week: moment().week(),
         
        },
        function(data,status){
        	// alert(JSON.stringify(data.message));
        	counter = 1;
        	$.each(data.message, function () {

        		if(counter <= 3){
        		// alert(moment(this.start).format('dddd, MMMM Do YYYY, h:mm a'));

        		     $('#'+counter+' h4').html(moment(this.start).format('dddd, MMMM Do YYYY, h:mm a'));
        		     $('#'+counter+' h5').html(this.title);
        		     $('#'+counter+' span').html(this.description);
        		     }else{
        		     	// break;
        		     }
				 counter ++;
				});
        // mydata = data.message;
           
        });
	
    }
    getmyEvents()
// alert(JSON.stringify(getmyEvents()));
</script>