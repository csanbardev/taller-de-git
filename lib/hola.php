<?php
// Autor: Cristian Sanchez Barba <mail@mail.com>
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);


