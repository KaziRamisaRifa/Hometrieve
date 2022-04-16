<?php

  include 'connection.php';
  session_start();
if($_SESSION['logged_in']==false){
  header('Location:login.php');
}
$userid  = $_SESSION['userid'];
$h_id =  $_GET['id'];

  if (isset($_POST['contact'])) 
  {
    $h_id =  $_GET['id'];
    $dbMess = strip_tags($_POST['message']);
    $sql = "UPDATE contact_owner SET reply='$dbMess' WHERE onwer_id='$userid' AND house_id='$h_id'";
    $result1 = mysqli_query($conn, $sql);
    $sql = "UPDATE contact_owner SET reply_status='Active' WHERE onwer_id='$userid' AND house_id='$h_id'";
    $result1 = mysqli_query($conn, $sql);
        echo "<script>
        alert('Thank you For Your Response!');
        window.location.href='view_inbox.php';
        </script>";
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Reply Inbox</title>
        <meta charset="utf-8">
        
        <link href="assets/image/logo1c.jpeg" rel="icon">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/css/contact_us.css">
        <style>
    body
    {
      background-image: url('assets/image/fbbg.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    </style>
    
    </head>
    <body>
        <section id="contact">
        <div class="container-fluid">
            <h2 class="text-center font-weight-bold text-dark text-capitalize pt-5">Contact Owner</h2>
            <hr class="w-25">
            <div class="row" >
                <div class="col-lg-8 col-md-8 mx-auto">
                    <form id="feed" class="p-5 grey-text " method="POST" action="reply_inbox.php?id=<?php echo $h_id ?>">
                        <div class="md-form form-sm"> Send a message <i class="fa fa-commenting prefix"></i>
                            <textarea type="text" name="message" id="form8" class="md-textarea form-control form-control-sm" rows="4" required=""></textarea>

                        </div>
                        <br>
                        <div class="text-center mt-4">
                            <button class="button-75" role="button" name="contact" form="feed"> <i class="fa fa-paper-plane-o ml-1"> Send</i></button>
                         </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
