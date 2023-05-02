<?php include 'navbar.php' ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#sidebar .side-menu li.activeproject {
	background: var(--grey);
	position: relative;
}
#sidebar .side-menu li.activeproject::before {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	top: -40px;
	right: 0;
	box-shadow: 20px 20px 0 var(--grey);
	z-index: -1;
}
#sidebar .side-menu li.activeproject::after {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	bottom: -40px;
	right: 0;
	box-shadow: 20px -20px 0 var(--grey);
	z-index: -1;
}
</style>

<main class="title_start">
			<div class="head-title">
				<div class="left">
					<h1>Pacakages</h1>
					<ul class="breadcrumb">
						<li>
							<a href="pacakge.php">Pacakages</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="index.php">Home</a>
						</li>
					</ul>
				</div>
				
			</div>


			




<table data-replace="jtable" id="example" aria-label="JS Datatable" data-locale="en" data-search="true">
    <div class="serviceadd">
        <a href="addpacakge.php" class="btn btn-info text-white mb-3">Add Pacakage</a>
    </div>
            <thead>
                <tr>
                
                    <th>Title <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Pacakage Time <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Pirce <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Image <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Transportation <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Accommodation <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Total Meal <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>No Of Person <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Action <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    include 'config.php';
                    $alldata = mysqli_query($conn, "SELECT * FROM `alltour` ");

                    while ($row = mysqli_fetch_array($alldata)) {
                        
                        echo "<tr>
                       
                        <td>$row[title]</td>
                        <td>$row[pacakage_time]</td>
                        <td>$row[pirce]</td>
                        <td><img src='$row[image]' alt=''></td>
                        <td>$row[transportation]</td>
                        <td>$row[accommodation]</td>
                        <td>$row[total_meal]</td>
                        <td>$row[no_of_person]</td>
                        
                        <td><a href='editproject.php'><i class='fa fa-pencil-square-o me-3 text-info' aria-hidden='true'></i></a><a href='deletepack.php?id=$row[id]'><i class='fa fa-trash-o text-danger' aria-hidden='true'></i></a></td>
                        </tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>
        <script src="js/datatable.min.js"></script>
        <script src="js/jquery-3.6.4.js"></script>

        <script>
            $(document).ready(function(){

            });
        </script>
        <script></script>
		</main>