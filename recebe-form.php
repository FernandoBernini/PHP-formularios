<?php 
// o isset verifica se uma variavel existe
//$_GET guarda os dados quando enviados por GET
// dentro dos [] colocamsos o name de um imput para obter seu valor 
// o if verifica se o campo nome foi enviado por GET
if(isset($_GET['nome'])) {
echo "<h1>Campos enviados por GET:</h1>";
echo "Nome: " . $_GET['nome'] . "<br>";
//podemos colocar o valor que veio por GET em outra variavel 
$ano = $_GET['ano_nascimento'];
//date("Y") retorna o ano atual do servidor 
$idade = date("Y") - $ano;
echo "<p>Nasceu em: $ano e tem $idade anos.</p>";


} else {

echo "<p style='color: red;'> Não veio nada por GET!</p>";
}

//$POST guarda os dados enviados por POST
//$SERVER guarda dados do servidor e da requisição
if($_SERVER['REQUEST_METHOD'] =='POST'){
    echo "<h1>Campos enviados por GET:</h1>";
echo "Nome: " . $_POST['nome'] . "<br>";
//podemos colocar o valor que veio por GET em outra variavel 
$ano = $_POST['ano_nascimento'];
//date("Y") retorna o ano atual do servidor 
$idade = date("Y") - $ano;
echo "<p>Nasceu em: $ano e tem $idade anos.</p>";


}else{
    echo "<p style='color: red;'>Não veio nada por POST!</p>";
}


?>

<pre>

<?php 
print_r($_SERVER);

?>



</pre>
