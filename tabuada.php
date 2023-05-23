

<body>
    <h1>Tabuada com formulário</h1>
    <form method="POST">
        <span>Insira um numero </span>
        <input type="number" placeholder= "digite um numero" name="numeroEscolhido">
       <br>
       <span>Insira um limite </span>
        <input type="number" placeholder= "digite um limite" name="limite">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
<?php
$num = $_POST['numeroEscolhido'];
$limite = $_POST['limite'];
// ! é inversor de valor lógico, TRUE vira FALSE e FALSE vira TRUE
if (!empty($num)) {
    for ($i = 1; $i <= $limite; $i++) {
        echo "$num X $i = " . $num * $i . "<br>";
    }
}
/*
<?php
$variavel=5;
echo"tabuada do 8 <br>";
for($i=0;$i<=100;$i++){
echo"$variavel x $i = ".$variavel*$i."<br>";
}
?>
*/
?>