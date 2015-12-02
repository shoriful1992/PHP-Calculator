<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

<script src="js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<body>
	<div class="container">
		<div class="row col-md-8">
			<div class="panel panel_default">
				<div class="panel-body">
					<form class="form-horizontal" action="" method="post">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Month Name</label>
							<div class="col-sm-10">
								<select name="month" class="form-control">
									<option value="">select month</option>
									<option value="01">Jan</option>
									<option value="02">Feb</option>
									<option value="03">Mar</option>
									<option value="04">Apr</option>
									<option value="05">May</option>
									<option value="06">Jun</option>
									<option value="07">Jul</option>
									<option value="08">Aug</option>
									<option value="09">Sep</option>
									<option value="10">Oct</option>
									<option value="11">Nov</option>
									<option value="12">Dec</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Year</label>
							<div class="col-sm-10">
								<select name="year" class="form-control">
									<option value="">select year</option>
									<?php
									for($x=1992; $x<=2030; $x++)
									{	
										?>
										<option value=""><?php echo $x;?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<input type="submit" name="btnSave" class="btn btn-default" value="save">
								</div>
							</div>	
						</form>
					</div>
				</div>	
			</div>	
		</div>	
		<?php
		if(isset($_POST['btnSave']))
		{
			$m = $_POST['month'];
			$y = $_POST['year'];
			$date = $y.'-'.$m.'-01';
			$fday = date("w", mktime(0,0,0, $m,1,$y));
			$tday = cal_days_in_month(CAL_GREGORIAN,$m,$y);
			echo '<table width="400px" border="1">
			<tr>
				<th colspan="7">'.date("M-Y", strtotime($date)).'</th>
			</tr>
			<tr>
				<th>Sun</th>
				<th>Mon</th>
				<th>Tue</th>
				<th>Wed</th>
				<th>Thu</th>
				<th>Fri</th>
				<th>Sat</th>
			</tr>
			';
			$day_count = 0;
			for($row=1; $row<=5; $row++)
			{
				echo '<tr>';
				for($t=0; $t<=6; $t++)
				{
					echo "<td>";
					if($day_count>0 AND $tday>$day_count)
					{
						echo ++$day_count;
					}
					else if($t==$fday)
					{
						echo ++$day_count;
					}
					else
					{
						echo '';
					}	
					echo "</td>";
				}	
				echo '</tr>';
			}	
			echo '</table>';
		}	
		
		?>
