<?php
namespace app\Controller;


class AdminController
{
    private static $admin = 'admin';
    private static $password = '1234';


    public function indexAction()
    {
        $message = 'Admin'; #$this->logIn();
        return $message;
    }
    public function logIn() {
        $l = $p = null;
        ?>
    <form method="POST">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="button" name="submit" value="Log In">
    </form>
<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['login']) && isset($_POST['password'])) {
                $l = $_POST['login'];
                $p = $_POST['password'];
            }
        }
        if($l === self::$admin && $p === self::$password) {
            return "<script>document.write('Admin');</script>";
        } elseif ($l === null || $p === null) {
            return 'Log in, please';
        }
        else return 'Wrong login or password';
}
}
?>
