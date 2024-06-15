<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="public/css/register.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    <label for="text" class="details">Username</label>
                    <input type="text" name="username" id="username" placeholder="Enter your username" <?php global $error; if(!empty($error['username']) || !empty($error['account'])) { echo "class = 'error'"; } ?> value="<?php echo set_value('username'); ?>" />
                    <p class="error"> <?php echo form_error('username'); ?></p>
                </div>
                <div class="input-box">
                    <label for="password" class="details">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" <?php global $error; if(!empty($error['password']) || !empty($error['account'])) { echo "class = 'error'"; } ?>/>
                    <p class="error"> <?php echo form_error('password'); ?></p>
                </div>
            </div>
            <p class="error"> <?php echo form_error('account'); ?></p>
            <!-- <p class="redirect-path">Do not have an account?<a href="?mod=account&action=register">Register</a></p> -->
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