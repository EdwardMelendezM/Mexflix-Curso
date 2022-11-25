<?php
require("./StatusController.php");
echo "<h1> CRUD con MVC de la tabla status </h1>";
$status = new StatusController();
$status_datos=$status->read();
$num_status=count($status_datos);
echo "<h2>Tamaño:".$num_status."</h2>";

echo "<table
    <tr>
        <th>status_id</th>
        <th>status</th>
    </tr>";

for ($i=0; $i < $num_status; $i++) { 
    echo" <tr>
            <td>".$status_datos[$i]["status_id"]."</td>
            <td>".$status_datos[$i]["status"]."</td>

        </tr>";
}
echo "</table>";


echo "<h1>Insertando status</h1>";
$new_status= array(
    'status_id' => 0,
    'status'=>'Otro status'
);
//$status->create($new_status);
echo "<h1>Actualizando status</h1>";
$update_status= array(
    'status_id' => 6,
    'status'=>'Other status'
);

//$status->update($update_status);

echo "<h1>Eliminando status</h1>";
//$status->delete(7);
?>