<?php
$link = new mysqli('127.0.0.1', 'root', '', 'rolloutd');
if ($link->connect_error) 
{
  die('Erro na Conex�o (' . $link->connect_errno . ') ' . $link->connect_error);
}
$link->query("SET NAMES 'utf8'");
$link->query('SET character_set_connection=utf8');
$link->query('SET character_set_client=utf8');
$link->query('SET character_set_results=utf8');
//echo 'Conex�o efetuada com sucesso... <br>' .  $link->host_info;
?>
