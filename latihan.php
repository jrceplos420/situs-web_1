<?php
function login($user, $pass)
{
    $userBenar = "admin";
    $passBenar = "123";

    if ($user == $userBenar && $pass == $passBenar) {
        return "Login berhasil";
    } else {
        return "Login gagal";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username">
    <br><br>
    <input type="password" name="password" placeholder="Password">
    <br><br>
    <input type="submit" value="Login">
</form>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    echo login($u, $p);
}
?>