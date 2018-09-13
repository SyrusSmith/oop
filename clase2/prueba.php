<?php

require('usuario.php');

$usuario = new user('Nahuel', '123456', 'nahueldibiase@hotmail.com');

$usuario1 = new user('Tribador', '123456', 'tribadorrios@tribador.com');

$usuario->setEmail('nahueldibiase@hotmail.com');
echo $usuario->getEmail();

?>