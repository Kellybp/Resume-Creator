<?php 
   include("../views/CRUDheader.php"); 
   include("../models/CRUDnavBar.php"); 
   
   $movie_id = trim(filter_input(INPUT_POST, 'movie_id', FILTER_VALIDATE_INT));
   
   require_once('../models/database.php');
   
   $stmt = $db->prepare("SELECT * FROM movies WHERE MovieID = :movieID");
   
   $stmt->bindParam(':movieID', $movie_id);
   
   $stmt->execute();
   
   $movie = $stmt->fetch();
   
   ?>
    <h3 class="white-text">Update Movie</h3>
    <br/>
   <main>
      <div class="row">
         <form class="col s9" action="update_movie.php" method="post" id="update_movie_form">
            <input type="hidden" name="movie_id" value="<?php echo $movie['MovieID']; ?>"/>
            <div class="row">
               <div class="input-field col s6">
                  <input value="<?php echo $movie['Title'];?>" name="Title" type="text" class="validate" maxlength="60">
                  <label class="active" for="first_name">Title</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s6">
                  <input value="<?php echo $movie['RelDate'];?>" name="RelDate" type="text" class="validate" maxlength="10">
                  <label class="active" for="first_name">Release Date</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s6">
                  <input value="<?php echo $movie['Genre'];?>" name="Genre" type="text" class="validate" maxlength="30">
                  <label class="active" for="first_name">Genre</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s6">
                  <input value="<?php echo $movie['IMGString'];?>" name="IMGString" type="text" class="validate" maxlength="440">
                  <label class="active" for="first_name">Movie IMG String</label>
               </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" value="Update Movie" onclick="check()">Update
            <i class="material-icons right">send</i>
            </button>
         </form>
         <script>
            function check(){
               alert("You have updated a thing...beautiful");
            }
         </script>
         <div class="col s3">
            <img src="<?php echo $movie['IMGString'];?>" width="300px" height="300px">
         </div>
      </div>
   </main>
<?php include("../views/CRUDfooter.php"); ?>