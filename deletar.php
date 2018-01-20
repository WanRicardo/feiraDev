<?php
require 'inc/configuration.php';

$sql = new Sql();

$id = $_POST['id'];

$sql->query("DELETE FROM produtosfeira WHERE idProduto = '$id'");

$_SESSION["success"] = "Produto removido com sucesso.";

header("Location: listar.php");
die();
