<?php 

if (isset($_POST['login-submit'])) {

    require 'db.inc.php';

    $mailuid = $_POST['mailuid'];
    $pwd = $_POST['pwd'];

    if (empty($mailuid) || empty($pwd)) {
        header("location: ../index.php?error=emptyfields");
         exit();
    }

    else {
            $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
            $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
              header("location: ../index.php?error=sqlerror");
              exit();
        }
        else {          
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($pwd, $row['pwdUsers']);
                if ($pwdCheck == false) {
                    header("location: ../index.php?error=wrongpwd");
                    exit();
                }
                elseif ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];

                    header("location: ../index.php?login=success");
                    exit();
                }
                else     {
                    header("location: ../index.php?error=wrongpwd");
                    exit();
                }
            }
            else {
                header("location: ../index.php?error=nouser");
                exit();
            }
        }
    }

}
else {
    header("location: ../index.php");
    exit();
}        


?>