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
					<h1>Add Pacakage</h1>
					<ul class="breadcrumb">
						<li>
							<a href="pacakge.php">Pacakage</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="index.php">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

		
	<form action="addpacakgeaction.php" method="POST" class="mt-5" enctype="multipart/form-data">

		<div class="mb-3">
			<label for="title" class="form-label">Title</label>
			<input type="text" class="form-control" id="title" name="title">
		</div>

        <div class="mb-3">
			<label for="pacakage_time" class="form-label">Pacakage Time</label>
			<input type="text" class="form-control" id="pacakage_time" name="pacakage_time">
		</div>

        <div class="mb-3">
			<label for="starting_from" class="form-label">Starting From</label>
			<input type="text" class="form-control" id="starting_from" name="starting_from">
		</div>

        <div class="mb-3">
			<label for="pirce" class="form-label">Price</label>
			<input type="number" class="form-control" id="pirce" name="pirce">
		</div>

        <div class="mb-3">
			<label for="overview" class="form-label">Overview</label>
			<textarea name="overview" id="overview" cols="30" rows="10" class="form-control"></textarea>
		</div>

        <div class="mb-3">
			<label for="detail" class="form-label">Detail</label>
			<textarea name="detail" id="detail" cols="30" rows="10" class="form-control"></textarea>
		</div>

        <div class="mb-3">
			<label for="tour_peak_detail" class="form-label">Tour Peak Detail</label>
			<textarea name="tour_peak_detail" id="tour_peak_detail" cols="30" rows="10" class="form-control"></textarea>
		</div>


        <div class="mb-3">
			<label for="about_tour" class="form-label">About Tour</label>
			<textarea name="about_tour" id="about_tour" cols="30" rows="10" class="form-control"></textarea>
		</div>


        <div class="mb-3">
			<label for="condition" class="form-label">Condition</label>
			<textarea name="condition" id="condition" cols="30" rows="10" class="form-control"></textarea>
		</div>

        <div class="mb-3">
			<label for="image" class="form-label">Image</label>
			<input type="file" class="form-control" name="image" id="image">
		</div>

        <div class="mb-3">
			<label for="transportation" class="form-label">Transportation</label>
			<input type="text" class="form-control" id="transportation" name="transportation">
		</div>
        
        <div class="mb-3">
			<label for="accommodation" class="form-label">Accommodation</label>
			<input type="text" class="form-control" id="accommodation" name="accommodation">
		</div>
      

        <div class="mb-3">
			<label for="total_meal" class="form-label">Total Meal</label>
			<input type="text" class="form-control" id="total_meal" name="total_meal">
		</div>

        <div class="mb-3">
			<label for="no_of_person" class="form-label">No of Person</label>
			<input type="text" class="form-control" id="no_of_person" name="no_of_person">
		</div>


        <div class="mb-3">
			<label for="offer_view" class="form-label">Offer View</label>
			<textarea name="offer_view" id="offer_view" cols="30" rows="10" class="form-control"></textarea>
		</div>

        <div class="mb-3">
			<label for="duration" class="form-label">Duration</label>
			<input type="text" class="form-control" id="duration" name="duration">
		</div>
		
		<div class="w-50">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
		
	</form>







		</main>