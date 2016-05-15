<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="image/1.jpg" type="image/jpg">
	 
</head>
<body bgcolor="#E8E8E8">
<div class="WALL">
<div class="left">
<div class="logo">
	<img src="image/2.jpg"><h1 style="color:white;"></h1>
	</div>
<div class="panel">
	<cener>
	<br><br>
	<div><a href="index.php">Main</a></div>
	<div><a href="diagnost.php">Diagnostic</a></div>
	<div><a href="Hospitals.php">Hospitals</a></div>
	<div><a href="doctors.php">Doctors</a></div>
	<div><a href="contacts.php">Our contacts</a></div>
	</center>

	</div>
</div>
<div class="right"><div class="reg">
	<div class="login">
		<center>
		<br>
			<div><a href="pcn\index.php">Client</a></div>
				<div><a href="doc\index.php">Doctor</a></div>
				
			</center>
		
		</div></div>
			<div class="body">
				<div class="content">
		<center>		
				
		<ul>
		
	        <li><a href = "1.php"><img src="img\4.jpg" style="height:170px;width:170px;"/></a><div id = "demo1">Ph.D Michael Copermicus III the Great</div></li>
			
<button type="button" onclick="loadDoc1()">Info</button>

			
			<script>
				function loadDoc1() {
					var cf = new XMLHttpRequest();
					cf.onreadystatechange = function() {
						if (cf.readyState == 4 && cf.status == 200) {
						document.getElementById("demo1").innerHTML = cf.responseText;
						}
					};
					cf.open("GET", "ajax_info_1.txt", true);
					cf.send();
}
</script>

	        <li><a href = "2.php"><img src="img\5.jpg" style="height:170px;width:170px;"/></a><div id = "demo2">Ph.D Teodora Petr Alikjiakovw</div></li>
			
<button type="button" onclick="loadDoc2()">Info</button>
			
			<script>
				function loadDoc2() {
					var bh = new XMLHttpRequest();
					bh.onreadystatechange = function() {
						if (bh.readyState == 4 && bh.status == 200) {
						document.getElementById("demo2").innerHTML = bh.responseText;
						}
					};
					bh.open("GET", "ajax_info_2.txt", true);
					bh.send();
}
</script>

	        <li><a href = "3.php"><img src="img\6.jpg" style="height:170px;width:170px;"/></a><div id="demo3">Ph.D Vermillion Vassilisko Viktorovich</div></li>
			
<button type="button" onclick="loadDoc3()">Info</button>

				<script>
				function loadDoc3() {
					var cm = new XMLHttpRequest();
					cm.onreadystatechange = function() {
						if (cm.readyState == 4 && cm.status == 200) {
						document.getElementById("demo3").innerHTML = cm.responseText;
						}
					};
					cm.open("GET", "ajax_info_3.txt", true);
					cm.send();
}
</script>
			
		
	    </ul>	
		</center>
			
			
			<div class="online">
				<div class="form">
					</div>
            </div>
        </div>
      
				</div>
			</div>


		</div>

	

</div>
</body>
</html>
