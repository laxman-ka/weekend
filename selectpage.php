<?php include 'header.php'; ?>
<style type="text/css">
	.table {
		background-color: white!important;
	}
	.well {
		height: 100px!important;
		margin-bottom: 0px;
	}
	.dess {
		right: 20px;
		margin-left: 10px;
	}
	.modal-dialog {
		width: 200px;
	}
	.oc {
	margin:0;
	padding:0;
	background-image:url('images/seatoccupied.png');
	width:33px;
	height:26px;
	border:none;
	text-align:center;
	line-height:26px;
	font-family:Helvetica;
	font-size:16px;
	font-weight:bold;
	}
	.oc a, a:link, a:hover {
	color: black;
	text-decoration: none;
	}
	.emp {
	margin:0;
	padding:1px;
	background-image:url('http://demo.techbrij.com/780/images/available_seat_img.gif');
	width:33px;
	height:26px;
	border:none;
	line-height:26px;
	font-family:Helvetica;
	font-size:16px;
	font-weight:bold;
	color: black;
	text-decoration: none;
	}
	.emp a, a:link, a:hover{
	color: black;
	text-decoration: none;
	}
	.non {
	margin:0;
	padding:0;
	width:33px;
	height:26px;
	border:none;
	text-align:center;
	color: white;
	text-decoration: none;
	}
</style>
<body bgcolor="white">
<div class="container">
<div class="row" style="color:white;padding:10px;margin-left:0px;font-weight:500">
			<div class="col-lg-2">
				 <?php echo $_POST['caps1']; ?>
			</div >
			<div class="col-lg-1">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=>
			</div>
			<div class="col-lg-4">
				<?php echo $_POST['caps2']; ?>
			</div>
			<div class="col-lg-2">
				<i class="fa fa-2x fa-calendar-check-o" style="color:white"></i>&nbsp;<?php echo date('d-M-Y', strtotime($_POST['date_of_journey'])); ?>
			</div>
</div></div>
<div class="row">
		<div class="container">
			<div class="well" style="height:20px!important;font-weight:600">
					<div class="col-lg-4">
						 Travels/Bus Name
					</div >
					<div class="col-lg-2">
						Boarding Points
					</div>
					<div class="col-lg-2">
						 Duration
					</div>
					<div class="col-lg-2">
						Fare
					</div>
					<div class="col-lg-2">
						Departure Time
					</div>
			</div>
		</div>
			<?php
                $con = mysqli_connect('172.16.1.213', 'sankar', 'Infi@1234', 'laxman');

                $sql = 'select * from travels_names as t join travels_bus_types as c on c.id = t.type_id  order by t.id ASC';
                $res = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($res)) {
                    ?>
					<div class="container" >
						<div class="well">
							<div class="col-lg-4">
								<div class="col-lg-1 dess"><i class="fa fa-bus fa-2x" style="line-height:65px;color:#0aa89e"></i></div>
								<div class="col-lg-10" style="position:relative;left:-15px"><h4><?php echo $row['travel_name'];
                    ?></h4>
								<p><?php echo $row['name'];
                    ?></p></div>
							</div>
							<div class="col-lg-2">
								<p  data-toggle="modal" data-target="#myModal<?php echo $row['id'];
                    ?>">Boarding Points</p>
							</div>
							<div class="col-lg-2">
								<i class="fa fa-clock-o" style="color:red"></i>&nbsp;<?php echo $row['duration'] ?>
							</div>
							<div class="col-lg-2">
								<i class="fa fa-inr" style="color:#3F4E65"></i>&nbsp;<?php echo $row['fare'] ?>
							</div>
							<div class="col-lg-2">
								<i class="fa fa-clock-o" style="color:crimson"></i>&nbsp;<?php echo $row['dept_time'] ?>
								<a href="#laxman<?php echo $row['service_no'];
                    ?>" data-toggle="collapse" class="btn btn-primary" aria-expanded="false" aria-controls="collapseExample">Select Seat </a>
							</div>
						</div>
					</div>
					<div class="modal fade" id="myModal<?php echo $row['id'];
                    ?>" role="dialog">
					    <div class="modal-dialog">

					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Boarding Points</h4>
					        </div>
					        <div class="modal-body">
					            <table class="table table-bordered">
					            	<tr>
					            		<td>Guntur - <?php $date = strtotime($row['dept_time']);
                    $date += 900;
                    echo date('h:i A', $date);
                    ?></td>
					            	</tr>
					            	<tr>
					            		<td>Chil.Pet - <?php $date = strtotime($row['dept_time']);
                    $date += 4000;
                    echo date('h:i A', $date);
                    ?></td>
					            	</tr>
					            	<tr>
					            		<td>Ongole - <?php $date = strtotime($row['dept_time']);
                    $date += 8100;
                    echo date('h:i A', $date);
                    ?></td>
					            	</tr>
					            </table>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>

					    </div>
					</div>
					<div id="laxman<?php echo $row['service_no'];
                    ?>" class="collapse" style="text-align:center;background-color:#f5f5f5;width: 900px;
    margin: 0px 21%;padding:12px">

						<body>
						<?php
                        $ais     = ['A','B','E','C','D'];
                    $aisle       = ['E1','E2','E3','E4','E5','E6','E7','E8','E9'];
                    $seatnumbers = [
                        'A1' => '1','A2' => '5','A3' => '9','A4' => '13','A5' => '17','A6' => '21','A7' => '25','A8' => '29','A9' => '33','A10' => '37',
                        'B1' => '2','B2' => '6','B3' => '10','B4' => '14','B5' => '18','B6' => '22','B7' => '26','B8' => '30','B9' => '34','B10' => '38',
                        'E1' => '&nbsp;','E2' => '&nbsp;','E3' => '&nbsp;','E4' => '&nbsp;','E5' => '&nbsp;','E6' => '&nbsp;','E7' => '&nbsp;','E8' => '&nbsp;','E9' => '&nbsp;','E10' => '39',
                        'C1' => '3','C2' => '7','C3' => '11','C4' => '15','C5' => '19','C6' => '23','C7' => '27','C8' => '31','C9' => '35','C10' => '40',
                        'D1' => '4','D2' => '8','D3' => '12','D4' => '16','D5' => '20','D6' => '24','D7' => '28','D8' => '32','D9' => '36','D10' => '41', ];

                    echo '<table border=0 cellpadding=0 cellspacing=0 align=center>';
                    foreach ($ais as $i) {
                        echo '<tr>';
                        for ($r = 1;$r <= 10;++$r) {
                            $seat   = $i.$r;
                            $setnum = $seatnumbers[$seat];
                            if (in_array($seat, $r)) {
                                $bg = " class='oc'";
                            } elseif (!in_array($seat, $aisle)) {
                                $bg = " class='emp'";
                            } else {
                                $bg = " class='non'";
                            }
                            if (is_numeric($setnum)) {
                                echo '<td'.$bg.'><a href=confirm.php?seatnum='.$setnum.'&busid='.$row['service_no'].'>'.$setnum.'</a></td>';
                            } else {
                                echo '<td'.$bg.'>'.$setnum.'</td>';
                            }
                        }
                        echo '</tr>';
                    }
                    echo '</table>';
                    ?>
						</body>
						</html>
					</div>
					<?php

                }
                ?>

</div>

<script type="text/javascript">

	$('#myModal*').modal('show');
</script>
