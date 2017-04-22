<?php
//  echo $search;
  $search = $_GET['query'];
  /*if(isset($_GET['query'])){
    echo "Variable hai bc";
  }*/
  mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("searchengine");
  //$search = mysql_fetch_row($search);
  $query = mysql_query("SELECT * FROM results WHERE title LIKE '".$search."'");
  if (mysql_num_rows($query)<=1) {
    while ($a = mysql_fetch_array($query)) {
      echo nl2br("<b>Syntax</b> <br/>".$a['title']."<p><b>Description</b> <br/>".$a['description']."</p><br/><hr/>");
    }
  }
  else {
    echo "Result not found";
  }
 ?>
