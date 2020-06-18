<?php

$arrUfs = array(
    'ES', 'MG', 'RJ', 'SP'
);

$arrEstados = array(
    'São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'
);

$arrSiglaEstado = array();

for ($i = 0; $i < $arrUfs; $i++)
 {
     array_push($arrSiglaEstado, array(
        $arrEstados[$i]=> $arrEstados[$i]
     ));
};

print_r($arrSiglaEstado);

?>
