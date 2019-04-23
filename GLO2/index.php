<?php
	require_once('models/database.php');
	$query = 'SELECT * FROM squotes
			ORDER BY quoteID';

	$squote = $db->query($query);

	include("views/header.php");
	include("models/navBar.php");
?>

    <div class="parallax-container">
      <div class="parallax"><img src="images/sample1.jpg"></div>
    </div>


<?php
	$count = 0;
	$endDiv = 0;
	foreach($squote as $squotes) :
		$count ++;
		if(($count%5 == 0) || ($count == 1)){
			include("models/row.php");
			include("models/cards.php");
			$endDiv++;
		} else{
			include("models/cards.php");
		}
	endforeach;
	if($endDiv > 0){
		include("models/end.php");
		$endDiv--;
	}
?>

<button class="btn waves-effect waves-light" type="submit" value="DoAThing" onclick="userInteraction()">I will suprise you
            <i class="material-icons right">send</i></button>

<script>
	function userInteraction(){
		freshMan = 3 + 3;
		alert("3 + 3 = " + freshMan);
	}
</script>

<?php
include("views/footer.php");
?>