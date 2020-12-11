<?php

//var_dump($_SESSION['newUser']);

$materia = [
    'M2' => ['uf4'],
    'M3' => ['uf4', 'uf5', 'uf6'],
    'M5' => ['uf1', 'uf2', 'uf3'],
    'M6' => ['uf1', 'uf2', 'uf3', 'uf4'],
    'M7' => ['uf1', 'uf2', 'uf3', 'uf4']
];

return '
<?php
foreach ($materia as $item){
    foreach ($item as $i){
        echo $i;
        echo '<input type="checkbox">';
    }
    echo '<br>';
}

'

;
