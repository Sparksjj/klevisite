<?php

function table($cols=10, $rows=10, $color='#f4645f')
{
    echo '<table class="table table-bordered">';
    for($tr = 1; $tr <= $rows; $tr++){
        echo "<tr>";
        for($td = 1; $td <= $cols; $td++){
            if($tr == 1 || $td == 1){
                echo "<td style='background-color: $color'>". $tr * $td ."</td>";
            }else{
                echo "<td>". $tr * $td ."</td>";
            }
        }
        echo "</tr>";
    }
    echo '</table>';
}

/**
 *   [
 *       ['href' => '/', 'anchor' => 'Домой'],
 *       ['href' => '/table.php', 'anchor' => 'Таблица умножения'],
 *       ['href' => '#', 'anchor' => 'Контакты'],
 *   ];
 *
 * @param $menu array
 */
function menu($menu, $vertical=false)
{
    $ulClass = ' class="nav navbar-nav"';
    $liClass = '';

    if($vertical){
        $ulClass = ' class="list-group"';
        $liClass = ' class="list-group-item"';
    }

    echo "<ul$ulClass>";
    foreach ($menu as $m) {
        echo "<li$liClass><a href=\"{$m['href']}\">{$m['anchor']}</a></li>";
    }
    echo "</ul>";
}