
<?php
if(isset($_GET['titulo'])){
    $titulo=$_GET['titulo'];
}else{
    $titulo="titulo por defecto";
}
$html="<html>
<body>
    <h1>$titulo</h1>
</body>
</html>";
echo $html;



