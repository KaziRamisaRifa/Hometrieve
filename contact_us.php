<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">
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
            <h2 class="text-center font-weight-bold text-dark text-capitalize pt-5">Contact Us</h2>
            <hr class="w-25">
            <div class="row" >
                <div class="col-lg-5 col-md-12 mx-auto">
                    <form id="feed" class="p-5 grey-text " method="POST" action="feedback.php">
                        <div class="md-form form-sm"> Your name <i class="fa fa-user prefix"> </i>
                            <input type="text" name="fname" id="form3" class="form-control form-control-sm" required="">
                        </div>
                        <br>
                        <div class="md-form form-sm"> Your Email <i class="fa fa-envelope prefix"></i>
                            <input type="email" name="email" id="form2" class="form-control form-control-sm" required="">

                        </div>
                        <br>
                        <div class="md-form form-sm"> Your Message <i class="fa fa-pencil prefix"></i>
                            <textarea type="text" name="message" id="form8" class="md-textarea form-control form-control-sm" rows="4" required=""></textarea>

                        </div>
                        <br>
                        <div class="text-center mt-4">
                            <button class="button-75" role="button" name="feedback" form="feed"> <i class="fa fa-paper-plane-o ml-1"> Send</i></button>
                         </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
