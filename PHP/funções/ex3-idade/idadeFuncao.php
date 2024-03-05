<?php
function classificaIdade ($idade){
    if($idade <= 2)
        echo "Bebê \n";
    else if($idade <= 11)
        echo "Criança \n";
    else if($idade <= 19)
        echo "Adolescente \n";
    else if($idade <= 30)
        echo "jovem \n";
    else if($idade <= 60)
        echo "Adulto \n";
    else
        echo "Idoso \n";
}
?>