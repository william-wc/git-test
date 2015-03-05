<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="UTF-8">
		<style>
			table, th, td {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<?php 
			$table = array(
				array("02K01", "Tecnologia Web II", "Segunda", "Charles"),
				array("02J01", "Linguagem de Programação I", "Terça", "João"),
				array("02K01", "Linguagem de Programação I", "Quarta", "Charles")
			);
		?>
		<table id="tabela">
			<tr>
				<td>Turma</td>
				<td>Disciplina</td>
				<td>Semana</td>
				<td>Professor</td>
			</tr>
			<?php foreach ($table as $row) : ?>
			<tr>
				<td><?php echo $row[0]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[2]; ?></td>
				<td><?php echo $row[3]; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>		
	</body>
</html>