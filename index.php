<?php
    $db_connection = pg_connect("host=postgresql port=5432 dbname=postgresql user=2-18-0494 password=2180494");
    $SQLQuery = 'SELECT * FROM Comidas';
    $RecordSet = pg_query($db_connection, $SQLQuery);

?>
<h1> Comidas </h1> 
<table class="table table-bordered">
    <thead>
        <th>Nombre</th>
        <th>Pais</th>
    </thead>
    <tbody>
<?php
   while ($row = pg_fetch_row($RecordSet)) {
?>
         <tr>
             <td><?php echo $row[1]; ?></td>
             <td><?php echo $row[2]; ?></td>
        </tr>
<?php
    }
    pg_close($db_connection);
?>
</tbody>
</table>