<?php 
   include("../views/managerHeader.php"); 
   include("../models/managerNavBar.php"); 
   ?>
<div id="page">
    <h3 class="white-text">Add Quote</h3>
    <br/>
   <main>
      <div class="row">
         <form class="col s9" action="add_quote.php" method="post" id="add_quote_form">
            <div class="row">
               <div class="input-field col s6">
                  <input placeholder="Cleopatra" name="author" type="text" class="validate" maxlength="30">
                  <label class="active" for="first_name">author</label>
               </div>
            </div>
            <div class="row">
               <div class="input-field col s6">
                  <input placeholder="I say something" name="saying" type="text" class="validate" maxlength="300">
                  <label class="active" for="first_name">saying</label>
               </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" value="Add quote" onclick="adding()">Add
            <i class="material-icons right">send</i>
            </button>
         </form>
         <script>
            function adding(){
               alert("You have added a thing...Num, Num");
            }
         </script>
          <div class="col s3">
            <img src="../images/sample1.jpg" width="300px" height="300px">
         </div>
      </div>
   </main>
</div>
<?php include("../views/managerFooter.php"); ?>