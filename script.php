<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);// mostra de forma organizada as nossas variaveis

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo "Este campo não pode ser vazio";
    return;
}

if(strlen($nome) <3){
    echo "Nome deve ter o mínimo de 4 carácter";
    return;
}

if(strlen($nome) >40){
    echo "Nome deve ter o máximo de 40 carácter";
    return;
}

if(!is_numeric($idade)){
    echo "Informe um número para idade";
    return;
}


if($idade >= 6 and $idade <= 12){
    for($i=0; $i <= count($categorias); $i++){
        if($categorias[$i] == "infantil")
            echo "O nadador ".$nome ." compete na categoria infantil";

    }
}
elseif($idade >= 13 && $idade <= 17){
    for($i=0; $i <= count($categorias); $i++){
        if($categorias[$i] == "adolescente")
        echo "O nadador " .$nome ." compete na categoria ".$categorias[1];
    }
}
else{
    for($i= 0; $i <= count($categorias); $i++){
        if($categorias[$i] == "adulto")
            echo "O nadador " .$nome ." compete na categoria ".$categorias[2];
    }
}
