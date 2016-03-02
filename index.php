<?php
ini_set('display_errors', 1);
require 'vendor/autoload.php';
/**
  include_once 'examples.php';

  exampleBasicInstructions();
  exampleFull();
  exampleQueryParcels();
 *
 */

use Moip\Moip;


$moip = new Moip();
$moip->setEnvironment('test');
$moip->setCredential(array(
    'key' => '8UUKVUTBRLBGDGISZUY7UY7Y22SHZO3OIKBW6RMJ',
    'token' => '6YA2TFYGRIWA5LPPTUJRJ88VPBNMKLF1'
));

$moip->setUniqueID(false);
$moip->setValue('100.00');
$moip->setReason('Teste do Moip-PHP');

$moip->validate('Basic');

$moip->send();
print_r($moip->getAnswer());


