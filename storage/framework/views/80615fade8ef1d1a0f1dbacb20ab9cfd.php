<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

    <link href="<?php echo e(url('./assets/bootstrap-icons/font/bootstrap-icons.css')); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo e(url('./assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />

    <style>
        body{
            background-color: #0d2142
        }
    </style>

</head>

<body>
    <div class="container h-100">
        <div class="d-flex flex-column justify-content-center align-items-center h-100">
            <div class="text-center mb-10 d-none d-lg-block">
                <img src="<?php echo e(url('./assets/media/icons/logo.jpeg')); ?>" alt="logo-company" style="width: 100px" class="rounded me-5 border border-warning bg-warning" />
            </div>
            <div class="card w-100 w-lg-400px">
                <div class="card-body">
                    <form action="<?php echo e(url('sign-in')); ?>" method="post" id="form-sign-in" onsubmit="HandlerSignIn(event)">
                        <?php echo csrf_field(); ?>
                        <div class="text-center mb-10">
                            <h1>Bedtime Stories</h1>
                            <div class="text-gray-400 fw-bold fs-4">
                                Sign in with your <span class="text-warning">admin account</span>
                            </div>
                        </div>
                        <div class="form-group mb-5">
                            <label class="required fw-bolder">Email</label>
                            <input id="email" type="email" class="form-control" placeholder="name@example.com" name="email"  >
                            
                            <span id="emailError" style= "color:red"></span>
                        </div>
                        <div class="form-group mb-10">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="required fw-bolder">Password</label>
                                <a href="<?php echo e(url('sign-up')); ?>" class="text-warning fw-bolder">Forgot password ?</a>
                            </div>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control border-end-0" placeholder="Password" name="password">
                                <button class="input-group-text bg-white" type="button">
                                    <i id="eye-icon" class="bi bi-eye"></i>
                                </button>
                            </div>

                            
                            <span id="passError" style= "color:red"></span>
                        </div>

                        <div class="d-grid">
                            <button id="signInButton" class="btn btn-lg btn-warning btn-submit fw-bolder" type="submit">Sign In</button>
                        </div>
                    </form>

                </div>
            </div>

            <div class="d-flex flex-center flex-column-auto p-5">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted text-hover-primary px-2">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted text-hover-primary px-2">Contact Us</a>
                    </li>
                </ul>

            </div>

        </div>
    </div>

    <script>
        const textemail=document.getElementById('email');
        const textPw=document.getElementById('password');
        const signInButton=document.getElementById('signInButton');
        const HandlerSignIn=(event)=>{
            event.preventDefault();
            const form=event.target.id;
            const email = textemail.value;
            const password = textPw.value;
            const emailError=document.getElementById('emailError');
            const passwordError=document.getElementById('passError');
            emailError.innerHTML="";
            passwordError.innerHTML="";
            signInButton.textContent="Loading...";
            signInButton.disabled=true;
            setTimeout(() => {
                if(email===''){
                emailError.innerHTML="Email is required"
            }
            if(password===''){
                passError.innerHTML="Password is required"
            }
            if(email==='222310062@student.ibik.ac.id'&& password==='222310062'){
                signInButton.textContent="Success Sign In"
            }
            else{
                signInButton.textContent="Sign In"
            }signInButton.disabled=false;
            }, 1000);

            // else if(password===''){
            //     alert('Password required')
            // }else{
            //     if(email == '222310042@student.ibik.ac.id'&& password == '222310042'){
            //         alert('Welcome')
            //     }else{
            //         alert('Username & Password salah' )
            //     }
            // }
            // console.log(email,password);
        }
        signInButton.addEventListener('click',handlerSignIn);
    </script>


</body>

</html>
<?php /**PATH D:\Semester 4\222310062_ProjectPW\tugas-4\resources\views/pertemuan-6/P6PBSignIn.blade.php ENDPATH**/ ?>