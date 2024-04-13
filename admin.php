<?php
session_start();

// ***************************************** //
// **********	DECLARE VARIABLES  ********** //
// ***************************************** //
$login = 'login.php';
include("login.php"); 
$random1 = 'secret_key1';
$random2 = 'secret_key2';

$hash = md5($random1.$pass.$random2); 

$self = $_SERVER['REQUEST_URI'];


// ************************************ //
// **********	USER LOGOUT  ********** //
// ************************************ //

if(isset($_GET['logout'])) {
	unset($_SESSION['login']);
}


// ******************************************* //
// **********	USER IS LOGGED IN	********** //
// ******************************************* //

if (isset($_SESSION['login']) && $_SESSION['login'] == $hash) {

	?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="canonical" href="https://html5-templates.com/" />
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="script.js"></script>	
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Sementsul SuperAdmin</title>

<style>



iframe {
    /* Главный герой нашей сцены! */
    position: absolute;
    height: 97%;
    width: 97%; /* Используем весь доступный горизонтальный простор */
    /* Прощай, ограничивающая рамка! */
    border: 5;
    padding: 5; /* Отступы внутри блока? Для нас это нерационально. */
    margin: 5; /* Внешние отступы? Нам этого слишком. */
}

</style>
</head>
<body>
	<div id="desktop">
		<div class="window closed" data-title="Textolite">
<div><iframe src="textolite/textolite.php" width="1900" height="1900"></iframe></div>	</div>
		<div class="window closed" data-title="Файлы">
		<div>

<?php
session_start();
$_SESSION['iframe'] = md5(time()."random sentence");
?><iframe src="fm.php?internal=<?php echo $_SESSION['iframe'];?>" width="500" height="100"></iframe>
</div>
		</div>

		<div class="window closed" data-title="О PHP">
	<div><iframe src="scripts/info.php" width="1900" height="1900" sandbox="allow-scripts allow-same-origin"></iframe></div>
</div>
		<div class="window closed" data-title="Сервис">
			<div><iframe src="scripts/checkup.php" width="1900" height="1900" sandbox="allow-scripts allow-same-origin"></iframe></div>
		</div>


		
		

		<div class="window closed" data-title="Прочее">
			


		
		<div id="icons">
                        <a class="openWindow" data-id="7">Сейчас админку используют</a>
			<a class="openWindow" data-id="8">Программы</a>
                        <a class="openWindow" data-id="5">Поддержать</a>
                        <a class="openWindow" data-id="6">Справки</a>
                        <a href="https://textolite.ru/">Textolite site</a>
                        <a href="?logout=true">Выйти</a>
		</div>

		</div>

		<div class="window closed" data-title="Поддержать">
<iframe src="https://yoomoney.ru/quickpay/fundraise/button?billNumber=121SA01S6PA.240411&" width="330" height="50" frameborder="0" allowtransparency="true" scrolling="no"></iframe>​<br><br><br>
<iframe src="https://yoomoney.ru/quickpay/fundraise/button?billNumber=121SD34KPQC.240411&" width="330" height="50" frameborder="0" allowtransparency="true" scrolling="no"></iframe>​<br><br><br><br>
<iframe src="https://yoomoney.ru/quickpay/fundraise/button?billNumber=121SDVODK9C.240411&" width="330" height="50" frameborder="0" allowtransparency="true" scrolling="no"></iframe>​
			
<div>



</div></div>




<div class="window closed" data-title="Справки">

<div style="width:100%; height:100%; overflow: auto;">
<h2>Автор админки <a href="https://vk.com/magz2002">Семенцул Максим</a> 2024</h2><br>
Поддержать разработчика можно перейдя: <br>
Прочее > Поддержать<br><br><br>


            <h2>1)Пароли</h2><br>
         По умолчанию везде используется пароль: admin<br>
         Крайне важно сменить пароль, после установки админки,<br>
         дабы не допустит неправомерного доступа.<br>
         Для изменения пароля перейдите:<br>
         Безопасность > Изменить пароль.<br><br>
         Так же стоит установить пароль на <br>
         сторонние сервисы:<br><br>
         <h2>Php file manager:</h2><br>
         Прочее > Программы > Php file manager > Настройки<br><br>
        <h2>Textolite:</h2><br>
        Textolite > Настройки<br><br>
         <h2>2)Лицензия</h2><br>
         Данная админка является бесплатной<br>
         и распространяется по открытой лицензии GPL-3,<br>
         за исключением некоторых входящих в нее проектов<br>
         таких как Textolite, Phpfilemanager и simple-file-manager<br>

</div>



</div>

<div class="window closed" data-title="Сейчас админку используют">
<script type="text/javascript" src="//rf.revolvermaps.com/0/0/8.js?i=53tdnxijjo3&amp;m=8&amp;c=ff0000&amp;cr1=ffffff&amp;f=arial&amp;l=33" async="async"></script>
</div>

<div class="window closed" data-title="Программы">
<div id="icons">
			<a class="openWindow" data-id="9">Php file manager</a>
                    
		</div></div>



<div class="window closed" data-title="Php file manager">
			<div><iframe src="scripts/index.php" width="1900" height="1900" sandbox="allow-scripts allow-same-origin"></iframe></div>
		</div>






<div class="window closed" data-title="Изменить пароль">
			

<form method="POST">
<label>Введите логин</label><br>
<input style="display: inline;" type='text' name='ousername' size='20' maxlength='30' value='admin'><br>
<label>Введите пароль</label><br>
<input style="display: inline;" type='text' name='opassword' size='20' maxlength='30' value='admin'><br>
<label>Введите новый логин</label><br>
<input style="display: inline;" type='text' name='nusername' size='20' maxlength='30'><br>
<label>Введите новый пароль</label><br>
<input style="display: inline;" type='text' name='npassword' size='20' maxlength='30'><br>

<p><input style="cursor:pointer;display: inline;" type="submit" name="button_id" value="Применить" /></p>
</form>
<?php

# Если кнопка нажата
 if(isset( $_POST['button_id']))
{
$ousername = $_POST['ousername'];
$opassword = $_POST['opassword'];
$nusername = $_POST['nusername'];
$npassword = $_POST['npassword'];

$opass = md5("$opassword");
$pass = md5("$password");

$ouser = md5("$ousername");
$user = md5("$username");


if ($ousername == $username){ 

if ($opass == $pass){

 print "Все ок"; 

#смена пароля

// Открываем файл, чтобы получить существующее содержимое
$current = file_get_contents($file);

// Обновляем данные для входа
$current .= '<? 
$password = ' . $npassword . ';
$username = ' . $nusername . ';';

// Записываем содержимое обратно в файл
file_put_contents($login, $current);





}    
else { print "Логин или пароль не верны"; }

 }    
else { print "Логин или пароль не верны"; }


}
?>

</div>

<div class="window closed" data-title="Безопасность">
<div id="icons">
        <a class="openWindow" data-id="10">Изменить пароль</a>
</div></div>



		
		<div id="taskbar">		
		</div>
		
		<div id="icons">
                        <a class="openWindow" data-id="11">Безопасность</a>
			<a class="openWindow" data-id="0">Textolite</a>
			<a class="openWindow" data-id="1">Файлы</a>
			<a class="openWindow" data-id="2">О PHP</a>
			<a class="openWindow" data-id="3">Сервис</a>
			<a class="openWindow" data-id="4">Прочее</a>
		</div>




<br><p id="templateLink">Здравствуйт <?php echo $username; ?></p>
		
	</div>


</body>

</html>

<?php
}


// *********************************************** //
// **********	FORM HAS BEEN SUBMITTED	********** //
// *********************************************** //

else if (isset($_POST['submit'])) {

	if ($_POST['username'] == $username && $_POST['password'] == $password){
	
		//IF USERNAME AND PASSWORD ARE CORRECT SET THE LOG-IN SESSION
		$_SESSION["login"] = $hash;
		header("Location: $_SERVER[PHP_SELF]");
		
	} else {
		
		// DISPLAY FORM WITH ERROR
		display_login_form();
		echo '<p>Username or password is invalid</p>';
		
	}
}
	
	
// *********************************************** //
// **********	SHOW THE LOG-IN FORM	********** //
// *********************************************** //

else {
	display_login_form();
}


function display_login_form() { ?>


    <style>
    html {
  height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
    </style>

<div class="login-box">
  <h2>Login</h2>
  <form action="<?php echo $self; ?>" method='post' id="login">
    <div class="user-box">
      <input type="text" name="username" id="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" id="password" required="">
      <label>Password</label>
    </div>
    <a href="#" onclick="document.getElementById('login').submit(); return false;">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      -->
<input type="submit" name="submit" value="Submit">
    </a>
  </form>
</div>


<?php } ?>


