<?php include 'header.php';?>
<?php foreach ( $zoekresultaten as $result ):?> 
<tr>
<td><?=$result['Programma'];?></td>
<td><?=$result['Tijd'];?></td>
<td><?=$result['Datum'];?></td>
</td>
<?php endforeach;?>  
<?php include 'footer.php';?>