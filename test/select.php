<?php include('selectserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIEW</title>
  

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
 
 

</head>
<body>

<div class="container">
  <h2>All Data</h2>      
		<form action="" method="get"> 
			<div class="row">
				<div class="col-xs-6 col-md-4">
					<div class="input-group">
						<input type="text" class="form-control" name="name1" placeholder="Search Name here.." id="txtSearch" />
							<div class="input-group-btn">
								<button class="btn btn-primary" name="search" type="submit">
								<span class="glyphicon glyphicon-search"></span>
								</button>
							</div>
					</div>
				</div>
			</div>
			
			
			
			
			<?php
        if(isset($_GET['search'])){

            $search_var = $_GET['name1'];

            $sql1 = "select * from detail WHERE name LIKE '%".$search_var."%'";
			$quer1=mysqli_query($contt,$sql1);
            if($row1=mysqli_fetch_assoc($quer1)){

        ?>
            <table class="table table-striped">
			<thead>
				<tr>
				<th>Name</th>
				<th>Phone no.</th>
				<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $row1['name']; ?></td>
					<td><?php echo $row1['phone']; ?></td>
					<td><?php echo $row1['email']; ?></td>
				</tr>
			<?php
					}
				}
			?>
        
		</form>


		
<br>
		
		<button type="button" class="btn btn-primary" style="float:right;" onclick="javascript:location.href='web.php'">Back</button>
		
		<br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone no.</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
			while($count1!=$count)
			{
	  ?>
	  
	  <tr>
        <td><?php echo $array[$count1]['name']; ?></td>
        <td><?php echo $array[$count1]['phone']; ?></td>
        <td><?php echo $array[$count1]['email']; ?></td>
      </tr>
	  <?php
			$count1++;
			}
		?>
	  
    </tbody>
  </table>
</div>



</body>
</html>
