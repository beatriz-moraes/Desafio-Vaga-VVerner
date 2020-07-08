<!DOCTYPE html>
<html>
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<title></title>
</head>



<body>
	<div class="container-fluid p-4">
		<div class="row mb-3">
			<div class="col-9">Encontre seu Artigo</div>
    		<div class="col-3">
    			<select class="form-control" id="opcoes">
  					<option value="todos">Todos</option>
  					<option value="post-01">Terminal Rosa 01</option>
  					<option value="post-02">Terminal Rosa 02</option>
  					<option value="post-03">Terminal Rosa 03</option>
  					<option value="post-04">Terminal Rosa 04</option>
				</select>
    		</div>
		</div>
		<div class="row mb-3">
			<?php
				for ($i = 1; $i <= 3; $i++) { 
					for ($j = 1; $j <= 4; $j++) { 
			?>
					<div class="col-12 col-sm-6 col-lg-3 mb-3 post-0<?php echo $j; ?>">
						<div class="card">
							<img src="imagens/terminal_rosa.jpeg" class="card-img-top" alt="Terminal Rosa">
							<div class="card-body">
								<h5 class="card-title">Terminal Rosa 0<?php echo $j; ?></h5>
								<p class="card-text">
									Nosso objetivo é incentivar a participação de mulheres na tecnologia e promover a união entre as mesmas.
								</p>
						 		<a href="https://www.instagram.com/terminal_rosa/?hl=pt-br" class="btn btn-primary">Clique aqui</a>
							</div>
						</div>	
					</div>
			<?php
					} //fecha for j
				} //fecha for i
			?>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/config.js"></script>
</body>
</html>