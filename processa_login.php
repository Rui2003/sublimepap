<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST") {
    if (isset($_POST['nome'])&& isset($_POST['password']) && isset($_POST['email'])) {
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $con=new mysqli ("localhost","root","","papatualizada");
        if ($con->connect_errno!=0) {
            echo "Erro<br>".$con->connect_error;
            exit;
        }
        else{
            $sql="select * from utilizadores where nome=? and password=? and email=?";
            $stm=$con->prepare($sql);
            if ($stm!=false) {
                $stm->bind_param("sss",$nome,$email,$password);
                $stm->execute();
                $res=$stm->get_result();
                if ($res->num_rows==1) {

                    $_SESSION['login']="correto";
                }
                else{

                    $_SESSION['login']="incorreto";
                }
                header("refresh:5;url=home.php");
            }
            else{
                echo $con->connect_error;
                exit;
            }
        }
    }
}

?>