<html>
<head>
<title>Exemplo PHP - Microsserviços</title>
</head>
<body>
<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=utf-8');

echo '<h2>Versão Atual do PHP: ' . phpversion() . '</h2><br>';

$servername = "db";
$username = "root";
$password = "Senha123";
$database = "meubanco";

$link = new mysqli($servername, $username, $password, $database);

if ($link->connect_error) {
    die("Falha na conexão: " . $link->connect_error);
}

$valor_rand1 = rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();

$query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade, Host)
          VALUES ('$valor_rand1', '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2', '$host_name')";

if ($link->query($query) === TRUE) {
    echo "✅ Novo registro criado com sucesso!<br>";
} else {
    echo "❌ Erro: " . $link->error;
}

echo "<br>Hostname deste container: <b>$host_name</b>";
?>
</body>
</html>
