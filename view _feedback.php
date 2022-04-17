<?php

include 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Inbox</title>
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
        body {
            background-image: url('assets/image/fbbg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

</head>

<body>
    <h1 class="text-center text-dark text-capitalize pt-5">User Feedback</h1>
    <hr class="w-25 pt-3">


    <?php

    $sql = "SELECT * FROM contact_us";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

    ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <ul class="list-group shadow">
                        <li class="list-group-item">
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class="media-body order-2 order-lg-1">

                                    <h4><i class="fa fa-user"></i> User Name: <?php echo $row['name']; ?></h4>
                                    <h4><i class="fa fa-envelope"></i> User Email: <?php echo $row['email']; ?></h4>
                                    <h4><i class="fa fa-phone"></i> Subject: <?php echo $row['subject']; ?></h4>
                                    <h4><i class="fa fa-pencil"></i> Message: <?php echo $row['message']; ?></h4>

                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php } ?>
</body>

</html>