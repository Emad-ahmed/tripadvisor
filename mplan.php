<?php include 'navbar.php' ?>

<link rel="stylesheet" href="css/plan.css">

<style>
   .carttable
   {
      margin-top: 8rem !important;
   }
   nav{
      background: #222429 !important; 
   }
</style>


<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> বুকিং পলিসি </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <p> 👉 ধন্যবাদ! আপনার ট্যুরের বুকিং ডিমান্ড ইস্যুর জন্য ॥ শ্রীঘ্রই আমাদের স্থানীয় সার্ভিস প্রতিনিধি ডিমান্ডের বিষয়ে আপনাকে অবহিত করবে। <br> <br>👉 ডিমান্ডটির সেবা প্রদানের নিশ্চয়তা প্রাপ্তির পর ৫০% বুকিং মানি প্রদান করতে হবে। উক্ত বুকিং মানি প্রাপ্তি স্বিকারের কনফার্মেশন ম্যাসেজ আপনার মোবাইল নাম্বারে ও ভ্রমনের পুর্ণাঙ্গ গাইডলাইন আপনার ইমেইলে পাঠিয়ে দেওয়া হবে। <br> <br>👉 কোন কারণে বুকিং বাতিল করতে চাইলে বুকিংকৃত অর্থের ১০% সার্ভিস চার্য রেখে বাকী অর্থ ৩-৭ দিনের মধ্যে বুকিংকারীর আইডিতে ফেরত পাঠিয়ে দেওয়া হবে তবে ট্যুরের ৭ দিন বাকী থাকতে ট্যুরে যাওয়া বাতিল করলে বুকিংমানি অফেরতযোগ্য। <br> <br>👉 অনাকাংখিত দুর্ঘটনা বা প্রাকৃতিক গোলাযোগের কারণে আমাদের ভ্রমন সেবা প্রদান করা সম্ভব না হলে আমরা বুকিং মানি ৩ দিনের মধ্যে ফেরত পাঠিয়ে দিব। <br><br>👉 আমি আমার তৈরীকৃত প্যাকেজের সকল তথ্য ও বুকিংয়ের সকল নিয়ম-কানুন জেনেই এ বুিকং ডিমান্ড ইস্যু করেছি।</p>
      </div>
      
    </div>
  </div>
</div>


<div class="container carttable">
<main role="main">
<h2>Trip Cart</h2>
<table data-replace="jtable" id="example" aria-label="JS Datatable" data-locale="en" data-search="true">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Place Name</th>
                    <th>Hotel name</th>
                    <th>Price</th>
                    <th>Booking Date</th>
                    <th>Booking Policy</th>
                    <th>Package Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr><?php


$alldata = mysqli_query($conn, "SELECT * FROM user, reserve_transport where user.id = reserve_transport.user ORDER BY reserve_transport.id DESC");

while ($row = mysqli_fetch_array($alldata)) {
    if($row['status'] == 'False')
    {
    echo "<tr>
    <td>$row[id]</td>
    <td>$row[visit_place]</td>
    <td>$row[visit_hotel]</td>
    <td>$row[total_price]</td>
    <td>$row[trip_date]</td>
    <td><button type='button' class='btn bookingpolicy' data-toggle='modal' data-target='#exampleModal' >
    Booking Policy
  </button>
  </td>
    <td><button class='waitingpay' disabled>waiting for payment</button></td>
    <td><p class='contact'>We are contact to you as soon as possible!!</p></td>
    </tr>";
    } else{
        echo "<tr>
        <td>$row[id]</td>
        <td>$row[visit_place]</td>
        <td>$row[visit_hotel]</td>
        <td>$row[total_price]</td>
        <td>$row[trip_date]</td>
        <td><button type='button' class='btn bookingpolicy' data-toggle='modal' data-target='#exampleModal' >
        Booking Policy
      </button>
      </td>
        <td><button class='alreadypay' disabled>payment done</button></td>
        <td><p>done</p></td>
        </tr>";
    }
    
}

?></tr>
            </tbody>
        </table>
        <script src="js/datatable.min.js"></script>

</main>

</div>