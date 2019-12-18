<?php
$link=mysql_connect('localhost', 'root');
$bool=mysql_select_db('BelaSono', $link);
if(isset($_GET['login'])&&(isset($_GET['activate_code']))) {
    echo $_GET['login'];
    $login=$_GET['login'];
    $activate_code=$_GET['activate_code'];
	$query="SELECT *FROM login WHERE login='{$login}'";
	$result=mysql_query($query, $link);
	if(!empty($result)) {
		if(mysql_num_rows($result)>0) {
			$result=mysql_fetch_array($result);
			if($result["activation_code"]==$activate_code) {
	            $response = array();
	            $response["success"]=true;
	            echo "<h1>Ваш аккаунт был успешно подтвержден</h1>";
	            $result=mysql_query("UPDATE login SET activate_status=true WHERE login='{$login}'", $link)."<br>";
			} else {
	            echo "<h1>Секретный код не верный повторите попытку. </h1>"."<br>";
	        }
		}
	}
	else {
	    echo "<h1>Такой аккаунт не был найден</h1>"."<br>";
	}
}
?>
