<?php include 'navbar.php' ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#sidebar .side-menu li.activedashboard {
	background: var(--grey);
	position: relative;
	
}
#sidebar .side-menu li.activedashboard::before {
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
#sidebar .side-menu li.activedashboard::after {
	content: '';
	position: absolute;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	bottom: -40px;
	color:#3C91E6 !important;
	right: 0;
	box-shadow: 20px -20px 0 var(--grey);
	z-index: -1;
}
</style>

<main class="title_start">
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<table data-replace="jtable" id="example" aria-label="JS Datatable" data-locale="en" data-search="true">
            <thead>
                <tr>
                    <th>Sno. <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Ip Address <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>User Agent <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                    <th>Visit Time <i class="fa fa-arrow-circle-down" aria-hidden="true"></i></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    include 'config.php';
                    $alldata = mysqli_query($conn, "SELECT * FROM `visitors` ");

                    while ($row = mysqli_fetch_array($alldata)) {
                        
                        echo "<tr>
                        <td id='first'>$row[id]</td>
                        <td>$row[ip_address]</td>
                        <td>$row[user_agent]</td>
                        <td>$row[visit_time]</td>
                        </tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>

</mian>

			






