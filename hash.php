<?php
//sal está sendo definido com um valor aleatorio de 32bytes atraves da função random_bytes()
$sal = random_bytes(32);
$sal_salvo = bin2hex($sal);

$chave = bin2hex(random_bytes(32));
$chave_salva = $chave.hash_pbkdf2('sha256', $chave, $sal_salvo, 1000);

// echo("sal: ".$sal_salvo."\n");
// echo("chave_salva: ".$chave_salva."\n");
$senha = 'minha_senha';
// $senhaDois = 'senhaDois';
$senha_hash = password_hash($senha, PASSWORD_DEFAULT, ['' => $sal_salvo, 'key' => $chave_salva]);

echo("senha_hash: ".$senha_hash."\n");
$senha_inserida_pelo_usuario = 'minha_senha';
if (password_verify($senha_inserida_pelo_usuario, $senha_hash)) {
    echo "Senha correta!";
} else {
    echo "Senha incorreta.";
}


?>