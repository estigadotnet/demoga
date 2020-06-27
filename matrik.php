<?php

function html_table($data = array())
{
    $rows = array();
    foreach ($data as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table class='hci-table'>" . implode('', $rows) . "</table>";
}

$data = array(
    array('1' => '111111', '2' => '222222'),
    array('1' => '111111', '2' => '222222'),
    array('1' => '111111', '2' => '222222'),
	array('1' => '111111', '2' => '222222'),
    );

echo html_table($data);
?>
<form action="" method="POST">
<table>
<tr>
    <td><input type="textbox" name="matrix[0][]" value=""/> </td>
    <td><input type="textbox" name="matrix[0][]" value=""/> </td>
    <td><input type="textbox" name="matrix[0][]" value=""/> </td>
</tr>
<tr>
    <td><input type="textbox" name="matrix[1][]" value=""/> </td>
    <td><input type="textbox" name="matrix[1][]" value=""/> </td>
    <td><input type="textbox" name="matrix[1][]" value=""/> </td>
</tr>
<tr>
    <td><input type="textbox" name="matrix[2][]" value=""/> </td>
    <td><input type="textbox" name="matrix[2][]" value=""/> </td>
    <td><input type="textbox" name="matrix[2][]" value=""/> </td>
</tr>
</table>
<input type="submit" value="Proses">
</form>

<?php

  $txt = $_POST['matrix'];

  $mat = explode ("\n", $txt);

  for ($i = 0; $i < sizeof ($mat); ++$i)
    $mat[$i] = explode (' ', $mat[$i]);

?>

<?php
function show_matrix($num, $cols, $rows){
for($i=0; $i<$rows; $i++){
    for($j=0; $j<$cols; $j++){
        echo '<input size=2 name="matr['.$num.']['.$i.']['.$j.']"/>';
    }
    echo '<br/>';
}
}
show_matrix(0, 3, 3);
echo '<br/>';
show_matrix(1, 3, 3);
?>