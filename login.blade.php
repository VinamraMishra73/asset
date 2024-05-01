<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dpit Finance Employee Record Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css"  rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #80BCBD;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

         header {
            text-align: center;
            position: absolute; 
            top: 0;
            left: 0; 
            width: 100%; 
            
            margin-top: 40px;
            border-bottom: 4px solid black;
            color: white;
            padding-top: 20px;
             padding-bottom: 20px;  

         }
        
        header h1 {
            color: black; 
            
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-container input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .login-container .message {
            margin-top: 10px;
            color: #888;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .left-logo {
            position: absolute;
            top: 20px;
            left: 5px;
        }

        .right-logo {
            position: absolute;
            top: 10px;
            right: 10px;
           
        }
        .right1-logo {
            position: absolute;
            top: 10px;
            right: 70px;
           
        }
        footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
}

    </style>
    
</head>
<body>
    <header>
        <h1><b>DPIT Finance Employee Record Management System<b></h1>
        
    </header>

    <div class="left-logo">
    <img src="resources/images/production.png" alt="White Logo" width="450" class="left-logo"> 
    </div>
   
    <div class="right-logo">
    <img src="resources/images/mod.png" alt="White Logo" width="112" class="right-logo"> 
    </div>

    <div class="right1-logo">
    <img src="resources/images/mod1.png" alt="White Logo" width="300" class="right1-logo"> 
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-container">
                    <div class="logo">
                        <img src="resources/images/defence-production-logo.png" alt="Logo" width="250">
                    </div>
                    <h2><b>User Login</h2>
                    <form  action="{{ route('addlogin') }}" method="post" id="loginForm">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="text" name="email" id="email" placeholder="Email" required>
                        <input type="password" name="password" id="password" placeholder="Password" required>
   
                        <input type="submit" id="submit" value="Login"> 
                        <div id="message" class="message"></div>
                        <div class="message">Don't have an account? <a href="{{ route('registration') }}">Register</a></div>
                        @if(isset($errorMessage))
    <div class="alert alert-danger">{{ $errorMessage }}</div>
@endif

                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 DPIT Information Management System. All rights reserved.</p>
            <p>Designed by DDPMOD</p>
        </div>
    </footer>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->


    <script>

        $('#loginForm').submit(function(event){
            event.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            title: 'Success',
                            text: response.message,
                            icon: 'success'
                        }).then(() => {
                            window.location.href = "{{ route('dashboard') }}";
                        });
                    } else {
                        console.log(response);
                        Swal.fire({
                            title: 'Error',
                            text: response.message,
                            icon: 'error'
                        });
                    }
                },
                error: function(error) {
                    console.log(error);
                    Swal.fire({
                        title: 'Error',
                        text: 'An error occurred while processing your request',
                        icon: 'error'
                    });
                }
            });


        });
   
        </script>

</body>
</html>


