<?php include_once("header.php");
require 'inc/configuration.php';

	$sql = new Sql();

	$vetorProdutos = $sql->select("SELECT * FROM produtosfeira;");

	if(isset($_SESSION["success"])) {
	    
	    ?>
	    <p class="alert-success"><?= $_SESSION["success"]?></p>
	    <?php
	    unset($_SESSION["success"]);
	}

?>

<section>

	<div class="container" id="all-produtos">

		<div class="form-group">

			<h2 id="welcome">Lista de Produtos</h2>
		</div>

		<div class="scroll-table">

			<table id="lista-all-produto" class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th class="text-center" id="produto">Produto</th>
						<th class="text-center" id="quantidade">Quantidade</th>
						<th class="text-center" id="del">Excluir</th>
					</tr>
				</thead>
				<tbody class="lista-all">
					<?php
					    foreach($vetorProdutos as $produto) :
					?>
						<tr>
				            <td><?= $produto['nomeProduto'] ?></td>
				            <td><?= $produto['qtdProduto'] ?></td>
				            <td>
				                <form action="deletar.php" method="post">
				                    <input type="hidden" name="id" value="<?=$produto['idProduto']?>" />
				                    <button class="btn btn-danger">Remover</button>
				                </form>
				            </td>
				        </tr>
				    <?php
				    	endforeach
				    ?>
				</tbody>
			</table>
		</div>
	</div>
</section>

<?php include_once("footer.php");?>