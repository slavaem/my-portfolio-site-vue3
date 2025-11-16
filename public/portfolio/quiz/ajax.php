<?php

if (empty($_POST['data'])) {
	echo 'Данных нет';
} else {
	echo '<pre style="font-size: 12px;">' . print_r($_POST['data'], true) . '</pre>';
}
 
exit();
?>