<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	    <h1>Var12,Pershunkin.I.A.,IU4-12B</h1>
		<h2>Задание 1</h2>
		<?php
			for($i=0;$i<=100;$i=$i*$i){
				echo $i;
				}
		    for($i=0;$i<=100;$i=$i*$i*$i){
				echo $i;
				}	
		?>
		<h2>Задание 2</h2>
		<form method="POST">
			Введите значение A:<input type="action" name="A"><br/>
			Введите значение B:<input type="action" name="B"><br/>
			Введите значение C. Если вычисляете площадь, то вводить "1":<input type="action" name="C"><br/>
			<input type="submit" value="OK"
			<?php
			$A="$_POST('A')";
			$B="$_POST('B')";
			$C="$_POST('C')";
			
			$V=$A*$B*$C;
			if($V<0) {
				echo "Неверные значения!!!";
				}
			else {
				$V1=($V*1);
				echo $V1;
		    ?>
		</form>
	</body>
</html>
