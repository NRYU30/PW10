<?php
session_start();
if (isset($_POST['Login']))  {
    $user = $_POST['user'];                                     
    $pass = $_POST['pass'];
    //periksa login
    if ($user == "mahasiswa" && $pass == "@mahasiswa") {
        //menciptakan session
        $_SESSION['login'] = $user;
        //menuju ke halaman pemeriksaaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session2.php'> di sini (session2.php)</a>
        untuk menuju ke halaman pemeriksaan session ";

    }
}  else {
?>
<!DOCTYPE html>
<html><head>
<title>Silahkan login ...</title>
</head>
<body>
<form action ="" method="post">
<h2>Silahkan login ...</h2>
Username : <input type="text" name="user"/><br/>
Password : <input type="password" name="pass"/><br/>
<input type="submit" name="Login" value="Log In"/> 
</form>
</body>
</html>
<?php  }  ?>