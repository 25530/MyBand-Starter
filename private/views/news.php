<?php include 'header.php';?>
<?php
    $conn = dbConnect();
    $stmt = $conn->prepare('SELECT * FROM images');
    $stmt->execute();
    $images = $stmt->fetchAll();

?>
      <div class="konteener">
      <br><br>
      <div class="search-bar">
        <form action="<?php echo url('/zoeken')?>" method="GET">
            <input type="hidden" name="page" value="zoeken" />
            <input type="text" name="term" value="<?php if(isset($searchterm)): echo $searchterm; endif;?>" placeholder="Vul de zoekopdracht in" />
            <button type="submit">Zoek</button>
        </form>
    </div>
<br><br>
        <?php foreach ($images as $row)

{
    
  echo "<div id='artiekeldiv'>";
  echo "<br>";
    echo "<img src='images/".$row['image']."' >";
    echo "<h2>".$row['titel']."</h2>";
    echo "<p>".$row['text']."</p>";
  echo "</div>";
}

      ?>   
      </div>
<?php include 'footer.php';?>
