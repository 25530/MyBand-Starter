  <?php include 'header.php';?>
  <?php
    $conn = dbConnect();
    $stmt = $conn->prepare('SELECT * FROM agenda');
    $stmt->execute();
    $agenda = $stmt->fetchAll();

?>
    <div class="agendawrapper">
    <div class="agendaa">
      <table>
        <tr>
          <th>Programma</th>
          <th>Tijd</th>
          <th>Datum</th>
        </tr>
          
        <?php foreach ($agenda as $data):?>

<tr>
  <td><?=$data['Programma'];?></td>
  <td><?=$data['Tijd'];?></td>
  <td><?=$data['Datum'];?></td>
</td>
<?php endforeach;?>      
</table>
    </div>            
    </div>
    <?php include 'footer.php';?>