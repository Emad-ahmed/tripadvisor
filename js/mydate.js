$(function () { 
    //var dateToday = new Date(); 
    
    $('#startDate').datepicker().datepicker();
    $('#startDate').datepicker('option', 'minDate', mdate());
  
    function mdate(){
        // If current date is 1st or 15th & after 12:00pm disable current date
        var startDate = new Date(), 
        returnVal = 0,
        dateToday = new Date(), 
        getDate = dateToday.getDate(),
        getHour = dateToday.getHours();      
        if(getHour >= 12 && getDate == 1) {
            startDate.setDate(dateToday.getDate() + 14)
        } else if (getHour >= 12 && getDate == 15) {
            startDate.setMonth(dateToday.getMonth() + 1, 1);
        } else if (getHour < 12 && getDate == 13) {
          	startDate.setMonth(dateToday.getMonth() + 1, 1);
        } else {
					
				} 
        return startDate;
    }
});