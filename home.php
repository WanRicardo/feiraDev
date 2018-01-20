<?php include_once("header.php");

require 'inc/configuration.php';

if(isset($_POST["nomeProduto"]) && isset($_POST["qtd"])) {

    $produto = $_POST["nomeProduto"];
    $quantidade = $_POST["qtd"];
    unset($_POST["nomeProduto"]);
    unset($_POST["qtd"]);

    $sql = new Sql();

    $dados = $sql->query("INSERT INTO produtosfeira SET nomeProduto = '$produto', qtdProduto = '$quantidade'");

    if ($dados) {

        echo "<script type='text/javascript'>alert('Produto cadastrado com sucesso!');</script>";
    }
}

?>

<section>
    
    <form method="POST" action="home.php">

        <div class="form-group col">

            <label for="nomeProduto">Nome Produto</label>
            <input type="text" name="nomeProduto" id="nomeProduto" class="form-control" placeholder="Ex. Maçã, Tomate..." required autofocus tabindex="1">
        </div>

        <div class="form-group col">

            <label for="qtd">Qantidade</label>
            <input type="number" name="qtd" id="qtd" class="form-control" min="1" max="1000" required tabindex="2">
        </div>

        <div class="col">

            <button type="submit" class="btn btn-primary">Adicionar Produto</button>
        </div>
    </form>
</section>

<?php include_once("footer.php");?>