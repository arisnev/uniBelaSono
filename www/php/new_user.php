<?php
session_start();
$response=array();
$link=mysql_connect('localhost', 'u0684722_robot', 'Zaqwsx12345123');
$bool=mysql_select_db('u0684722_robot', $link);
$symbolsArray=array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6','7', '8', '9');
shuffle($symbolsArray);
$key=implode($symbolsArray);
	if(isset($_GET['log'])&&isset($_GET['pass'])) {
		$login=$_GET['log'];
		$pass=$_GET['pass'];
		$result=mysql_query("INSERT INTO login(login, password, activation_code) VALUES('{$login}', '{$pass}', '{$key}')", $link);
var_dump($result);
	if($result) {
		require 'send_email.php';
		$resId=mysql_query("SELECT id FROM login WHERE login='{$login}'", $link);
		$resId=mysql_fetch_array($resId);
		file_get_contents("http://www.zaural-vodokanal.ru/php/rob/creat_map.php?id_user=".$resId['id']);
		Send_Mail($login, $key);
	} else {
			echo "Произошла ошибка.Повторите позже";
	}
}
?>