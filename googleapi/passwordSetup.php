<?php
include '../connection.php';
session_start();
if(isset($_POST['next_btn'])){
    if($_POST['password'] == $_POST['conf_password']){
        $_SESSION['password'] = $_POST['password'];
        $firstName=$_SESSION['user_first_name'];
        $lastName=$_SESSION['user_last_name'];
        $email = $_SESSION['user_email_address'];
        $contact = $_POST['contact'];
        $password=$_SESSION['password'];
        $sql = "INSERT INTO user(id, first_name, last_name, email, contact, password) VALUES ('','$firstName','$lastName','$email','$contact','$password')";
        $result = mysqli_query($conn, $sql);
        $sql = "SELECT id
        FROM user
        WHERE email='$email'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $dbid = $row["id"];
        
        if($result){
            $_SESSION['logged_in'] = true;
            $_SESSION['userid'] = $dbid;
            $_SESSION['username'] = $firstName;
            header('Location:../index.php');
        }
        else{
            
            echo "query not successfull";
        }
        
    }
    else{
        $_SESSION['logged_in'] = FALSE;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Set up password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .setup-card {
            border: 2px solid grey;
            border-radius: 6px;
            padding: 50px 20px;
        }
    </style>

</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="col-md-4 col-lg-3 setup-card">

                    <h5 class="mb-5">Take a moment to set up your account!</h5>

                    <div class="mb-3">
                        <label class="form-label">Contact no.</label>
                        <div class="input-group mb-3">
                            <input class="form-control password" id="contact" class="block mt-1 w-full" type="text" name="contact" required />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group mb-3">
                            <input class="form-control password" id="password" class="block mt-1 w-full" type="password" name="password" required />
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash" id="togglePassword" style="cursor: pointer"></i>
                            </span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <div class="input-group mb-3">
                            <input class="form-control conf_password" id="conf_password" class="block mt-1 w-full" type="password" name="conf_password" required />
                            <span class="input-group-text">
                                <i class="fas fa-eye-slash" id="toggleconf_Password" style="cursor: pointer"></i>
                            </span>
                        </div>
                    </div>

                    <button class="mt-4 btn btn-outline-success" name="next_btn" type="submit">Next <i class="fas fa-arrow-right"></i></button>

                </div>
            </div>
        </form>
    </div>

    <script>
        $("#togglePassword").click(function(e) {
            e.preventDefault();
            var type = $(this).parent().parent().find(".password").attr("type");
            console.log(type);
            if (type == "password") {
                $(this).removeClass("fas-eye-slash");
                $(this).addClass("fa-eye");
                $(this).parent().parent().find(".password").attr("type", "text");
            } else if (type == "text") {
                $(this).removeClass("fa-eye");
                $(this).addClass("fas-eye-slash");
                $(this).parent().parent().find(".password").attr("type", "password");
            }
        });

        $("#toggleconf_Password").click(function(e) {
            e.preventDefault();
            var type = $(this).parent().parent().find(".conf_password").attr("type");
            console.log(type);
            if (type == "password") {
                $(this).removeClass("fas-eye-slash");
                $(this).addClass("fa-eye");
                $(this).parent().parent().find(".conf_password").attr("type", "text");
            } else if (type == "text") {
                $(this).removeClass("fa-eye");
                $(this).addClass("fas-eye-slash");
                $(this).parent().parent().find(".conf_password").attr("type", "password");
            }
        });
    </script>
</body>

</html>