<?php

$strings = $this->getRows();
$funcs = $this->getCols();

?>


<table>
    <tr>
        <td>Id</td>
        <td>Name</td>
    </tr>
    <?php

    while ($strings >= 0) {
        echo '<tr>';
        while ($funcs > 0) {
            $element = current($this->cells);
            echo '<td>' . $element . '</td>';
            $element = next($this->cells);
            $funcs--;
        }
        echo '</tr>';
        $strings--;
        $funcs = $this->getCols();
    }
    ?>

</table>