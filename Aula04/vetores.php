<?php

    $nome = 'Rodrigo';

    $variavel[] = 'Arroz';
    $variavel[] = 'Feijão';
    $variavel[8] = 'Batata frita';
    $variavel[] = 'Bife';
    $variavel[3] = 'Alface';
    $variavel[] = 'Ovo';
    $variavel[] = 'Beringela';

    echo '<pre>';
    var_dump(print_r($variavel, true));
    echo '</pre>';

?>