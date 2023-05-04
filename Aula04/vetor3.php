<?php

    $variavel = array(
        0 => 'Branco',
        1 => 'Azul',
        2 => 'Amarelo',
        3 => 85
    );

    $variavel[] = 'Preto';

    $carros = array(
        'Volks' => 'Fusca',
        'Fiat'  => 'Uno',
        'Ford'  => 'Fiesta'
    );

    echo $carros['Fiat'];


    $carros['Ferrari'] = '350';
    $carros[] = 'Caminhao';


    $variavel['carros'] = $carros;
    var_dump(print_r($variavel, true));
    echo '$variavel["carros"]["Ford"]';

?>