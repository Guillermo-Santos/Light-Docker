<?php
    $db_connection = pg_connect("host=postgresql port=5432 dbname=postgresql user=2-18-0494 password=2180494");
    $SQLQuery = 'SELECT * FROM Folders';
    $RecordSet = pg_query($db_connection, $SQLQuery);

?>
<h1> Mis Folders </h1>
<div style="text-align:center;width: 700px;margin: 0 auto;border-style: dotted;">
    <table class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Descripcion</th>
            <th>Descripcion Corta</th>
            <th>Folder padre</th>
        </thead>
        <tbody>
            <?php
               while ($row = pg_fetch_row($RecordSet)) {
            ?>
            <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
                <td><?php echo $row[3]; ?></td>
            </tr>
            <?php
                }
                pg_close($db_connection);
            ?>
        </tbody>
    </table>
</div>