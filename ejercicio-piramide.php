<html>
<body>
    <form >
    <input type="number" name="num">
    <button type="submit"  >enviar</button>
    </form>
    <?php 
        $num= $_GET['num'];
        for ($i=1; $i <= $num; $i++) { 
            for ($j=1; $j <=$i ; $j++) { 
                echo "*";
            }
            echo"<br>";
        }

    ?>

</body>
</html>