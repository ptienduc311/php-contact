<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/register.css" />
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="header-reg">
            <div class="title">Login</div>
            <img src="public/images/logo.png" alt="" class="logo" />
        </div>
        <form method="POST">
            <div class="user-details">
                <div class="input-box">
                    <label for="email" class="details">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter your email" <?php global $error; if(!empty($error['email'])) { echo "class = 'error'"; } ?> value="<?php echo set_value('email'); ?>" />
                    <p class="error"> <?php echo form_error('email'); ?></p>
                </div>
                <div class="input-box">
                    <label for="password" class="details">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" <?php global $error; if(!empty($error['password'])) { echo "class = 'error'"; } ?>/>
                    <p class="error"> <?php echo form_error('password'); ?></p>
                </div>
            </div>
            <p class="redirect-path">Do not have an account?<a href="?mod=account&action=register">Register</a></p>
            <div class="button">
                <input type="submit" name="btn-log" value="Login" />
            </div>
        </form>
    </div>
    <script>
        document
            .querySelectorAll(".user-details .input-box input")
            .forEach((input) => {
                input.addEventListener("input", function() {
                    if (this.value) {
                        this.classList.add("valid");
                    } else {
                        this.classList.remove("valid");
                    }
                });
            });
    </script>
</body>

</html>