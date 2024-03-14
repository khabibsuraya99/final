<?php

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <!-- Favicons -->
    <link href="../asset/image/logo_atas.png" rel="icon">

    <style>
        .form-signin {
            max-width: 330px;
            padding: 1rem;
            margin-top: 80px !important;
        }

        </style>

</head>

  <body>
    <main class="form-signin w-100 m-auto text-center">
        <form action="login_proses.php" method="POST">
            <img class="mb-4 " src="../asset/image/logo_darisantri.png" alt="" width="180x">
            <h1 class="h3 mb-3 fw-normal">Login Sini Bang</h1>

            <div class="form-floating">
            <input type="email" name="ipEmail" class="form-control focus-ring" id="floatingInput" placeholder="name@example.com" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
            <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mt-2">
            <input type="password" name="ipPw" class="form-control focus-ring" id="floatingPassword" placeholder="Password" style="--bs-focus-ring-color: rgba(var(--bs-success-rgb), .25)">
            <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
            </div>
            <button class="btn btn-success w-100 py-2" type="submit">Sign in</button>
            
        </form>

        <h3 class='display-6'>Belum punya akun?</h3> <br>
        <button class="btn btn-primary w-100 py-2" data-bs-toggle='modal' data-bs-target='#modalRegister' type="submit">Register</button>
        
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2024 Darisantri.com</p>
    </main>
        
        <!-- Modal Register -->
        <div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title text-center" id="exampleModalLabel">Daftar User Baru</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form action="pp.php" method="POST">
                    <label for="registNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="registNama"  id="registNama" placeholder="Siapa Namamu ..!">
                    <label for="registEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="registEmail" id="registEmail" placeholder="name@example.com">
                    <label for="registPw" class="form-label">Password</label>
                    <input type="password" class="form-control" name="registPw" id="registPw" placeholder="Masukan 7 Karakter Mengandung Angka dan Simbol">
                    <label for="registPw" class="form-label">Masukin Password Lagi</label>
                    <input type="password" class="form-control" id="registPw" placeholder="Masukan Sandi Yang Sama"> <br>
                    <input type="submit" class="form-control btn btn-danger">
                </form>
            </div>
            
           
            </div>
        </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>