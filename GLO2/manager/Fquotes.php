<?php
include("../views/managerHeader.php");
include("../models/managerNavBar.php");
?>

  <div class="parallax-container">
    <div class="parallax"><img src="../images/sample1.jpg">
    </div>
  </div>
  <br/>

  <button class="btn waves-effect waves-light" type="submit" name="tableLoad" onclick="load()">Show Quotes!</button>

  <table id="activityTable"></table>

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
      
        xmlHttp.open("GET", "../xml/quotes.xml", true);
        xmlHttp.send();
      }
      
      function processXML(xml){
        var i;
        var XMLDocument = xml.responseXML;
        var table = "<tr><th>Name</th><th>Description</th></tr>";
        var headerType = XMLDocument.getElementsByTagName("quote");
        for(i = 0; i < headerType.length; i++){
          table += "<tr><td>" + headerType[i].getElementsByTagName("author")[0].childNodes[0].nodeValue + "</td><td>" + headerType[i].getElementsByTagName("saying")[0].childNodes[0].nodeValue+ "</td></tr>";
        }
      
        document.getElementById("activityTable").innerHTML = table;
        confirm('button pressed!');
      }   
  </script>

  <br />
  <br />
  <button class="btn waves-effect waves-light" type="submit" name="fontChange" onclick="bigger()">Change table font</button>

  <script>
    function bigger(){
      document.getElementById('table').style.fontFamily = "Impact,Charcoal,sans-serif";
    document.getElementById("font").style.margin = "50px 10px 20px 30px";
    }
  </script>

  <br />
  <br />
 

<?php
include("../xml/xsl.php");
include("../views/managerFooter.php");
?>