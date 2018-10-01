<html>
<head>
   <link rel="stylesheet" type="text/css" href="./styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<div class="container">
  <h2>All Data</h2>      
		<form action="" method="get"> 
			<div class="row">
				<div class="col-xs-6 col-md-4">
					<div class="input-group">
						<input type="text" class="form-control"  placeholder="Search Name here.." id="txtSearch" onkeyup="showUser(this.value)" />
							<div class="input-group-btn">
								<button class="btn btn-primary"  type="submit" style="height:34px;">
								<span class="glyphicon glyphicon-search"></span>
								</button>
							</div>
					</div>
				</div>
			</div>
		
<button type="button" class="btn btn-primary" style="float:right;" onclick="javascript:location.href='web.php'">Back</button>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div><br>


</body>
</html>