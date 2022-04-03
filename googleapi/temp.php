<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Set up password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4">
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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



            </div>
        </div>
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
    </script>
</body>

</html>