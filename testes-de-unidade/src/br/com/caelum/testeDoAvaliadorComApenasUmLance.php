<?php
namespace src\br\com\caelum;

require_once 'src/br/com/caelum/leilao/service/Avaliador.php';
require_once 'src/br/com/caelum/leilao/dominio/Lance.php';
require_once 'src/br/com/caelum/leilao/dominio/Leilao.php';
require_once 'src/br/com/caelum/leilao/dominio/Usuario.php';

use src\br\com\caelum\leilao\dominio\Usuario;
use src\br\com\caelum\leilao\dominio\Leilao;
use src\br\com\caelum\leilao\dominio\Lance;
use src\br\com\caelum\leilao\service\Avaliador;

$joao = new Usuario("Joao");
$leilao = new Leilao("PS4");

$leilao->propoe(new Lance($joao, 300.0));

$leiloeiro = new Avaliador();
$leiloeiro->avalia($leilao);

var_dump($leiloeiro->getMaiorDeTodos() == 300.0);
var_dump($leiloeiro->getMenorDeTodos() == 300.0);
