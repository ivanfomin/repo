<table>

    <?php
    //проход по  массиву ячеек и вывод их в таблице
    $arr = $this->cells; // если работать с магическим массивом напрямую выбрасывает "Indirect modification of overloaded property"
    $strings = current($arr); //кол-во строк
    $funcsCount = next($arr); // кол-во столбцов
    $funcs = $funcsCount;

    while ($strings > 0):
        echo '<tr>';
        while ($funcs > 0):
            echo '<td>' . next($arr) . '</td>';
            $funcs--;
        endwhile;
        echo '</tr>';
        $funcs = $funcsCount;
        $strings--;
    endwhile;
    ?>
</table>

