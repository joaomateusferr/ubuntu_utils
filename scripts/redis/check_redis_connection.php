<?php 

//https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04

//composer require predis/predis

require __DIR__ . '/vendor/autoload.php';

$client = new Predis\Client();
$client->hset('user-01', 'name', 'joao', 'sur', 'ferreira', 'email', 'joao@test01@uol.com');
//$client->hset('user-01', 'email', 'joao@test.tv');
$value = $client->hgetall('user-01');
var_dump($value);exit;

?>
