<html>
<body>
    <form >
    <input type="string" name="num">
    <button type="submit"  >enviar</button>
    </form>
    <?php 
         if(isset($_GET['num']) && is_numeric($_GET['num'])){
            $num= $_GET['num'];
            for ($altura=1; $altura <= $num; $altura++) { 
                for ($espacio=1; $espacio <=$num-$altura ; $espacio++) { 
                    echo "&nbsp&nbsp";
                }
                for ($asteriscos=1; $asteriscos <=($altura*2)-1 ; $asteriscos++) { 
                    echo "*";
                } 
                echo"<br>";
            }    
        }else{
            echo "no se ha enviado o no es un numero";
        }

    ?>

</body>
</html>