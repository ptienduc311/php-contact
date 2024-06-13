<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/register.css" />
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="header-reg">
            <div class="title">Register</div>
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
                <div class="input-box">
                    <label for="cpassword" class="details">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Confirm your password" <?php global $error; if(!empty($error['cpassword'])) { echo "class = 'error'"; } ?>/>
                    <p class="error"> <?php echo form_error('cpassword'); ?></p>
                </div>
            </div>
            <p class="redirect-path">You have already an account?<a href="?mod=account&action=login">Login</a></p>
            <div class="button">
                <input type="submit" name="btn-reg" value="Register" />
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