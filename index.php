<?php
	//Header
	include("Models/indexHeader.php");
?>
<div id="headNav"></div>
<div id="mySidenav" class="sidenav">
  <a id="close" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#8592;</a>
  <a id="open" href="javascript:void(0)" class="closebtn" onclick="openNav()">&#8594; </a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>


<div id="main">
	<?php
		//Cover letter content
		include("Sections/Cover/contactMe.php");
	?>
	<p id="date">
		<?php
			echo date("F d"); 
			echo ', ';
			echo date("Y");
		?>
	</p>
	<?php
		include("Sections/Cover/to.php");
		include("Sections/Cover/mainContent.php");
	?>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "20%";
  document.getElementById("main").style.marginLeft = "20%";
  document.getElementById("close").style.display = "block";
  document.getElementById("open").style.display = "none";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "10%";
  document.getElementById("main").style.marginLeft = "10%";

  document.getElementById("open").style.display = "block";
  document.getElementById("close").style.display = "none";
}
</script>
<?php
//Footer
 include("Models/indexFooter.php");
?>