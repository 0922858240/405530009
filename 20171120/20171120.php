<?php
$data=array(
    array("Volve",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
)
?>
<table border="1">
		<tr>
			<th>Name</th>
			<th>Stock</th>
			<th>Sold</th>
		</tr>
<?php
for($i=0;$i<count($data);$i++){
    $row=$data[$i];
    echo "</tr>";
    for($j=0;$j<count($row);$j++){
        $col=$row[$j];
        echo "<td>$col</td>";
    }
    echo "</tr>";
}

foreach ($data as $key => $row) {
    echo "<tr bgcolor=red>";
    foreach ($row as $key => $col) {
        echo "<td>$col</td>";			
    }
    echo "</tr>";
}

$table = join("",array_map("parseRow", $data));
echo $table;
function parseRow($row){
    $rowContent = join("", array_map("parseCol",$row));
    return "<tr>$rowContent</tr>";
}
function parseCol($col){
    return "<td>$col</td>";
}
?>
</table>