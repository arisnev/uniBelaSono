<?php
session_start();
$response=array();
$link=mysql_connect('localhost', 'root');
$bool=mysql_select_db('BelaSono', $link);
echo "<script>alert('132');</script>";
if(isset($_POST['log'])&&isset($_POST['pass'])) {
	$login=$_POST['log'];
	$password=$_POST['pass'];
	$query="SELECT *FROM login WHERE login='{$login}'";
	$result=mysql_query($query, $link);
 	$result=mysql_fetch_array($result);
 	var_dump($result);
 	if($result["activate_status"]==1){
    	if(!empty($result)) {
    		if($password==$result["password"]) {
    			$_SESSION['login'] = $login;
    			$_SESSION['password'] = $password;
    				echo "<script>";
    				echo "location.replace('index.php')";
    				echo "</script>";
    		} else {
    			echo "<script>";
    			echo "alert('Неверный пароль');";
    			echo "location.replace('index.php')";
    			echo "</script>";
    		}
    	}else {
    			echo "<script>";
    			echo "alert('Такой пользователь не существует');";
    			echo "location.replace('index.php')";
    			echo "</script>";
    	}
    } else {

    			echo "<script>";
    			echo "alert('Аккаунт не активирован');";
    			echo "location.replace('index.php')";
    			echo "</script>";
    }
}
mysql_close($link);
?>
