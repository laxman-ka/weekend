<?php include "header.php"; ?>
<style type="text/css">
	#wrapper {
    position: relative;
    max-width: 960px;
    margin: 20px auto;
    box-shadow: 0 0 18px rgba(0, 0, 0, .4);
    background: #f8f8f8;
    overflow: hidden;
    padding-left: 20px;
}
</style>
<body >
	<div class="container">
		<div id="wrapper">
		<form method="post" action="getconfirm.php">
			<h3>Passenger details</h3>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<b>Name</b>
						<input type="text" name="name" id="name" required  class="form-control" style="width:50%"  placeholder="Enter Your Name">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<b>Email Id</b>
						<input type="email" name="email" id="email" required  class="form-control" style="width:50%"  placeholder="Enter Your Email">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<b>Mobile</b>
						<input type="text" name="mobile" id="mobile" required  class="form-control" style="width:50%"  placeholder="Enter Your Mobile">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<b>Boarding Point</b>
						<select class="form-control" required  name="boarding-pt" style="width:50%;align;center">
							<option value="Guntur">Guntur - <?php $date = strtotime($row['dept_time']); $date += 900;
					            						echo date('h:i A', $date);	 ?></option>
							<option value="Chil.Pet">Chil.Pet - <?php $date = strtotime($row['dept_time']); $date += 4000;
					            						echo date('h:i A', $date);	 ?></option>
							<option value="Ongole">Ongole - <?php $date = strtotime($row['dept_time']); $date += 8100;
					            						echo date('h:i A', $date);	 ?></option>
						</select>
					</div>
				</div>
				<input type="hidden" name="seat" value="<?php echo $_GET['seatnum']; ?>">
				<input type="hidden" name="bus_id" value="<?php echo $_GET['busid']; ?>">
				<div class="row">
					<div class="text-center">
					<input type="submit" class="btn btn-primary" style="margin-bottom:20px" value="Confirm Booking"></div>
				</div>
			</form>
			</div>
	</div>
</body>

<?php include "footer.php"; ?>
