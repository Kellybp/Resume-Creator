<?php
//Header
include("Models/indexHeader.php");
//Start content
include("Sections/Cover/contactMe.php");
?>

<p id="date"><?php
echo date("F d"); 
  echo ', ';
  echo date("Y");
?></p>

<?php
include("Sections/Cover/to.php");
include("Sections/Cover/mainContent.php");
?>
<?php
//Footer
 include("Models/indexFooter.php");
?>