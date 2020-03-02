<?php



include_once('./top.php');
?>

<div align='center'>
<form  action='../control/inclui_func.php'  method='POST'>



Nome:<br>
<input type='text' name='nome'><br>
Salario:<br>
<input type='text' name='salario'><br>
Depto:<br>
<input type='text' name='depto'><br>
Idade:<br>
<input type='text' name='idade'><br><br>
<input type='submit' value='enviar'>





</form>
</div>
<?php
include_once('./roda.php');

?>
