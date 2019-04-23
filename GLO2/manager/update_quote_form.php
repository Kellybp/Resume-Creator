<?php 
   include("../views/managerHeader.php"); 
   include("../models/managerNavBar.php"); 
   
   $quote_id = trim(filter_input(INPUT_POST, 'quote_id', FILTER_VALIDATE_INT));
   
   require_once('../models/database.php');
   
   $stmt = $db->prepare("SELECT * FROM squotes WHERE quoteID = :quoteID");
   
   $stmt->bindParam(':quoteID', $quote_id);
   
   $stmt->execute();
   
   $quote = $stmt->fetch();
   
   ?>
    <h3 class="white-text">Update quote</h3>
    <br/>
   <main>
      <div class="row">
         <form class="col s9" action="update_quote.php" method="post" id="update_quote_form">
            <input type="hidden" name="quote_id" value="<?php echo $quote['quoteID']; ?>"/>
            <div class="row">
               <div class="input-field col s6">
                  <input value="<?php echo $quote['author'];?>" name="author" type="text" class="validate" maxlength="60">
                  <label class="active" for="first_name">author</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s6">
                  <input value="<?php echo $quote['saying'];?>" name="saying" type="text" class="validate" maxlength="10">
                  <label class="active" for="first_name">Release Date</label>
               </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" value="Update quote" onclick="check()">Update
            <i class="material-icons right">send</i>
            </button>
         </form>
         <script>
            function check(){
               alert("You have updated a thing...beautiful");
            }
         </script>
         <div class="col s3">
            <img src="../images/sample1.jpg" width="300px" height="300px">
         </div>
      </div>
   </main>
<?php include("../views/managerFooter.php"); ?>