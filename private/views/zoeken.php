<?php include 'header.php';?>
<div class="wrop"> 
<?php foreach ( $zoekresultaten as $result )

{
    
  echo "<div id='artiekeldiv'>";
  echo "<br>";
    echo "<img src='images/".$result['image']."' >";
    echo "<h2>".$result['titel']."</h2>";
    echo "<p>".$result['text']."</p>";
  echo "</div>";
}

      ?> 
      </div>
<?php include 'footer.php';?>