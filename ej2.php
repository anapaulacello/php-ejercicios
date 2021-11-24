<?php
if(!isset($_GET['num'])){
    echo "no has pasado nada por parametro";
}
elseif($_GET['num']%2==0){
    echo "par";
}else{
    echo "impar";
}