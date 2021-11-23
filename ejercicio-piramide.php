<html>
<body>
    <form >
    <input type="number" name="num">
    <button type="submit"  >enviar</button>
    </form>
    <?php 
        $num= $_GET['num'];
        for ($altura=1; $altura <= $num; $altura++) { 
            for ($espacio=1; $espacio <=$num-$altura ; $espacio++) { 
                echo "-";
            }
            for ($asteriscos=1; $asteriscos <=($altura*2)-1 ; $asteriscos++) { 
                echo "*";
            } 
            echo"<br>";
        }

    ?>

</body>
</html>