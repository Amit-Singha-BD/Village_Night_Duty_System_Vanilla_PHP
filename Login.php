<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NG CMS</title>
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/Custom.css">
</head>
<body class="full_body">

<?php
    $error = "";
    $success = "";

    if(isset($_POST['submit'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if(empty($email)){
            $error = 'Please Enter Email or Phone Number.';
        }
        elseif(strpos($email, ' ') !== false) {
            $error = 'Email or Phone Number cannot contain spaces.';
        }
        elseif(strlen($email) > 40){
            $error = 'Email must be less than or equal to 40 characters.';
        }
        elseif(empty($password)){
            $error = 'Please Enter Password.';
        }
        elseif(strlen($password) < 8 || strlen($password) > 20){
            $error = 'Password must be between 8 and 20 characters.';
        }
        else{
            header('Location: Dashboard.php');
        }
    }

?>

<section>
    <div class="container">
        <div class="card card_css mx-auto mt-5" style="width: 30rem;">
            <div class="card-body p-5">
              <form method="POST" action="">
                <h3 class="fw-bold d-flex justify-content-center mb-4 text-white">Log In Form</h3>

                <div class="px-5 mt-3">
                    <!-- Display error or success message -->
                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($success)): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $success; ?>
                        </div>
                    <?php endif; ?>
                </div>

                    <div class="mb-3 mt-5">
                        <label for="exampleInputText1" class="form-label d-flex justify-content-center fw-bold label_css">Email or Phone</label>
                        <input name="email" type="text" class="form-control log-input" id="exampleInputText1" aria-describedby="emailHelp">
                  </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label d-flex justify-content-center fw-bold label_css">Password</label>
                        <input name="password" type="password" class="form-control log-input" id="exampleInputPassword1" aria-describedby="emailHelp">
                  </div>

                  <div class="d-flex justify-content-end">
                    <a class="text-decoration-none text-info" href="#">Forget Password</a>
                  </div>

                  <div class="d-flex justify-content-center mt-3">
                    <button class="log-button" name="submit" type="submit">Log In</button>
                  </div>

                  <div class="d-flex justify-content-center mt-4">
                    <p class="text-white">Create a New Account <a class="text-decoration-none text-info" href="#">Sign Up</a></p>
                  </div>

              </form>
            </div>
        </div>
    </div>
</section>

    <script src="Assets/js/bootstrap.min.js"></script>
</body>
</html>
