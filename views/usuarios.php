<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Template</title>
	<link rel="stylesheet" href="<?php echo site_url(); ?>
	 /vendor/twitter/bootstrap/dist/css/bootstrap.css"
	type="text/css"/>
</head>
<body>
	<div class="container">
			<h1>Usuarios</h1>
		<table border="1px" cellspacing="5">
				<thead>
					<th>Nome</th>
					<th>Endereço</th>
					<th>Nascimento</th>
					<th>E-mail</th>
				</thead>
			
	<?php foreach ($usuarios as $key => $value) { ?>
			<tbody>
				<td><?php  echo $value->nome ?></td>
				<td><?php  echo $value->endereco ?></td>
				<td><?php  echo $value->nascimento ?></td>
				<td><?php  echo $value->email ?></td>
			
			</tbody>
	<?php } ?>
	</table>
	</div>
</body>
</html>