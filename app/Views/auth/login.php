<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="/assets/fontawesome/css/all.css">
    <!-- css -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>

</head>
<body style="background-color:#EDF2F6;">
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle p-4 rounded-2" style="width:350px; background-color:#FCFEFD; box-shadow: 0px 13px 36px -11px rgba(0,0,0,0.1);">
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
                <?php endif; ?>
                <form action="/login/authenticate" method="post">
                    <?= csrf_field() ?>
                <div class="text-center">
                    <img src="/assets/img/logo aslab.png" height="150px" alt="">
                </div>
                <div class="input-group mb-3 px-2">
                    <label for="username" class="form-label"></label>
                    <input type="text" class="form-control border-0 border-start border-top border-bottom rounded-start-1 focus-ring focus-ring-light fw-light py-2" style="font-size:14px;" value="<?php echo session()->getFlashdata('username');?>" id="username" name="username" placeholder="Username">
                    <span class="input-group-text bg-white border-0 border-end border-top border-bottom" id="basic-addon1"><i class="fa-solid fa-user me-1 text-dark text-opacity-50" style="font-size:14px;"></i></span>
                </div>
                <div class="input-group mb-4 px-2">
                    <label for="password" class="form-label"></label>
                    <input type="password" class="form-control border-0 border-start border-top border-bottom rounded-start-1 focus-ring focus-ring-light fw-light py-2" style="font-size:14px;" value="<?php echo session()->getFlashdata('password');?>" id="password" name="password" placeholder="Password">
                    <span class="input-group-text bg-white border-0 border-end border-top border-bottom" id="basic-addon1"><i class="fa-solid fa-lock me-1 text-dark text-opacity-50" style="font-size:14px;"></i></span>
                </div>
                <div class="px-2 mb-3">
                    <hr class="border-secondary mb-4">
                    <button type="submit" name="login" class="btn btn-primary w-100 rounded-1 fw-light" value="login">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
