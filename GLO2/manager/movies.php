<?php 
   include("../views/CRUDheader.php"); 
   include("../models/CRUDnavBar.php"); 
   
   require_once('../models/database.php');  
   $query = 'SELECT * FROM movies ORDER BY Title';
   
   $movie = $db->query($query);
   
   ?>
<div id="page">
    <h3 class="white-text">Movies</h3>
    <hr/>
      <button class="btn waves-effect waves-light" type="submit" value="Search Genre" onclick="load()">Search Genre
     <i class="material-icons right">send</i>
     </button>
   <h4 class="white-text">Genres</h4>
   <table class="white-text" id="genreTable"></table> 
   <script>
      function load(){
        var xmlHttp 
        if(window.XMLHttpRequest){
          xmlHttp = new XMLHttpRequest();
        } else{
          xmlHttp = new ActiveXObject("Microsof.XMLHTTP");
        }
        xmlHttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
              processXML(this);
          }
        };
      
        xmlHttp.open("GET", "../xml/activities.xml", true);
        xmlHttp.send();
      }
      
      function processXML(xml){
        var i;
        var XMLDocument = xml.responseXML;
        var table = "<tr><th>Name</th><th>Description</th></tr>" ;
        var headerType = XMLDocument.getElementsByTagName("genre");
        for(i = 0; i < headerType.length; i++){
          table += "<tr><td>" + headerType[i].getElementsByTagName("name")[0].childNodes[0].nodeValue + "</td><td>" + headerType[i].getElementsByTagName("descr")[0].childNodes[0].nodeValue+ "</td></tr>";
        }
      
        document.getElementById("genreTable").innerHTML = table;
        confirm('button pressed!');
        return false;
      }
   </script>
    <br/>
   <main>
      <div class="row">
         <table class="white-text">
             <?php foreach ($movie as $movies) : ?>
            <tr>
               <td id="title"><?php echo $movies['Title']; ?></td>
               <td><?php echo $movies['Genre']; ?></td>
               <td><?php echo $movies['RelDate']; ?></td>
               <td><img src="<?php echo $movies['IMGString']; ?>" width="30px" height="30px"></td>
               <td><form action="../movieManager/update_movie_form.php" method="Post" id="update_student_form">
                  <input type="hidden" name="movie_id" value="<?php echo $movies['MovieID']; ?>"/>
                  <button class="btn waves-effect waves-light" type="submit" name="Update">Update
                  </button>
               </form>
               </td>
               <td>
               <form action="../movieManager/delete_movie_interface.php" method="Post" id="delete_movie_form">
                  <input type="hidden" name="movie_id" value="<?php echo $movies['MovieID']; ?>"/>
                  <button class="btn waves-effect waves-light" type="submit" name="Delete" id="delete_button">Delete
                  </button>
               </form>
               </td>
            </tr>
            <?php endforeach; ?>
         </table>
      </div>
   </main>
</div>

<?php include("../views/CRUDfooter.php"); ?>