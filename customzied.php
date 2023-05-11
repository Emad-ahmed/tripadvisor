<?php include 'navbar.php' ?>



<link rel="stylesheet" href="css/signup.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    #pageHeader {
        background: url(img/trip2.jpg);
        background-size: cover;
        background-position: center top;
        margin-bottom: 100px; }

        
</style>

<section id="pageHeader" class="pageHeadernat">
      <div class="overlay">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="txt text-center">
                     <div class="sec-header">
                        <h2>CUSTOMIZED PLAN<span>.</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <div class="container mb-5">
   <div class="mb-4">
       <a href="" class="btn btn-outline-info col-2 active">Transportation</a>
    </div>
   <form action="customziedAction.php" method="POST">

   <div class="row">
    <div class="col-lg-6">
    <div class="mb-3">
    <label for="">Select From</label>
   <select class="form-select" aria-label="Default select example" name="divsionfrom" id="divsionfrom" onchange="DivisionList()">
        <option selected>Select Place</option>
        <option value="Sylhet">Sylhet</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Khulna">Khulna</option>
            <option value="Mymensingh">Mymensingh	</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Barishal">Barishal</option>
    </select>
    </div>

    

    </div>
    <div class="col-lg-6">
    <div class="mb-3">
    <label for="">Select To</label>
        <select class="form-select" aria-label="Default select example" name="divsionto" id="divsionto" onchange="DivisionList()">
            <option selected>Select Place</option>
            <option value="Sylhet">Sylhet</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Rangpur">Rangpur</option>
            <option value="Khulna">Khulna</option>
            <option value="Mymensingh">Mymensingh</option>
            <option value="Chittagong">Chittagong</option>
            <option value="Barishal">Barishal</option>
        </select>
    </div>
    </div>

    <div class="col-lg-6">
    <div class="mb-3">
    <label for="">Visit Place</label>
        <select class="form-select" aria-label="Default select example"  name="placelist" id="placelist" onchange="Placelist()">
        </select>
    </div>
    </div>

    <div class="col-lg-6">
    <div class="mb-3">
    <label for="">Select Hotel</label>
        <select class="form-select" aria-label="Default select example"  name="hotellist" id="hotellist" onchange="Hotellist()">
        </select>
    </div>    
    </div>

    <div class="col-lg-6">
    <div class="mb-3">
    <label for="">Transportation</label>
        <select class="form-select" aria-label="Default select example"  name="transportlist" id="transportlist" onchange="TransportationList()">
            
        </select>
    </div>
    </div>
    <div class="col-lg-6">
        
    <div class="mb-3">
    <label for="">Transportation List</label>
        <select class="form-select" aria-label="Default select example" name="paribhantlist" id="paribhantlist" onchange="ParhibhanList()">
        </select>
    </div>
    </div>


    <div class="col-lg-6">
    <div class="mb-3">    
    <label for="">Fare Type</label>
        <select class="form-select" aria-label="Default select example" name="farelist" id="farelist" onchange="FarelistList()">
            <option selected>Select Fare Type</option>
            <option value="One way">One Way</option>
            <option value="up-down">up-down</option>
        </select>
    </div>
    </div>

    <div class="col-lg-6">
        <div class="mb-3">
        <label for="">Trip Date</label>
            <input type="text" id="startDate" name="startDate">

    </div>
        </div>

        <div class="col-lg-6">
        <div class="mb-3">
        <label for="">Return Date</label>
            <input type="text" id="endDate" name="endtDate">

        </div>
        </div>



        <div class="col-lg-6">
        <div class="mb-3">
        <label for="">Number Of Seat</label>
        <!-- <div class="Input_Number">
            <div class="d-flex">
            
            <span id="input_minus" class="arrow-down" ><i class="fa fa-minus mr-1" aria-hidden="true" onclick="getValuePlus()" style="margin-top: 0.7rem; color:red;"></i></span>
            <input id="inputCalcBox" value="0" maxlength="100" autocomplete="off" type="text" onkeyup>
            <span id="input_plus" class="arrow-up"><i class="fa fa-plus  ml-1" onclick="getValuePlus()" aria-hidden="true" style="margin-top: 0.7rem; color:green;"></i></span>
            </div>

</div> -->

       <input type="number" id="inputCalcBox" name="inputCalcBox" onclick="getValuePlus()">

        </div>
        </div>


        <div class="col-lg-6">
        <div class="mb-3">
        <label for="">Fare Price</label>
        <input type="text" id="fareprice" name="fareprice">

        </div>
        </div>

        <div class="col-lg-6">
        <div class="mb-3">
        <label for="">Total Price</label>
        <input type="text" id="totalprice" name ="totalprice">

        </div>
        </div>
        
   </div>
   
  
    
      <div class="text-center mt-2">
      <button type="submit" class="btn btn-info col-6 pt-2">Add to Cart</button>
      </div>

   

   
    </form>
    </div>

    <script src="js/customizedplan.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

    <script>
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


$(function () { 
    //var dateToday = new Date(); 
    
    $('#endDate').datepicker().datepicker();
    $('#endDate').datepicker('option', 'minDate', mdate());
  
    function mdate(){
        // If current date is 1st or 15th & after 12:00pm disable current date
        var endDate = new Date(), 
        returnVal = 0,
        dateToday = new Date(), 
        getDate = dateToday.getDate(),
        getHour = dateToday.getHours();      
        if(getHour >= 12 && getDate == 1) {
            endDate.setDate(dateToday.getDate() + 14)
        } else if (getHour >= 12 && getDate == 15) {
            endDate.setMonth(dateToday.getMonth() + 1, 1);
        } else if (getHour < 12 && getDate == 13) {
            endDate.setMonth(dateToday.getMonth() + 1, 1);
        } else {
					
				} 
        return endDate;
    }
});
    </script>

      

<script>
    $("#input_plus").click(function() {
  increment();
});
$("#input_minus").click(function() {
  decrement();
});

function increment() {
  var inputNumber = parseInt($("#inputCalcBox").val());
 
  inputNumber+=1;
  $("#inputCalcBox").val(inputNumber);
}

function decrement() {
  var inputNumber = parseInt($("#inputCalcBox").val());
  inputNumber--;
  $("#inputCalcBox").val(inputNumber);
}
/**********input_plus************/
$("#input_plus").mousedown(function() {
  var inputNumber = parseInt($("#inputCalcBox").val());
  timeout = setInterval(function() {
    $("#inputCalcBox").val(inputNumber++);
  }, 150);
  return false;
});

$("#input_plus").mouseup(function() {
  clearInterval(timeout);
  return false;
});
/*********input_minus*************/
$("#input_minus").mousedown(function() {
  var inputNumber = parseInt($("#inputCalcBox").val());
  timeout = setInterval(function() {
    $("#inputCalcBox").val(inputNumber--);
  }, 150);
  return false;
});

$("#input_minus").mouseup(function() {
  clearInterval(timeout);
  return false;
});

</script>


<script>
//     $(document).ready(function() {
    

//         $('#divsionto').on('change', function(){
//             $('#transportlist').on('change', function(){

//             var selectedValue1 = $(this).val();
//             console.log(selectedValue1)
//             });
//         var selectedValue2 = $(this).val();
//         console.log(selectedValue2)
//     });


    

   
    
// });








</script>