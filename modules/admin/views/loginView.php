<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <base href="<?php echo base_url(); ?>"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="public/css/login.css" />
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
                    <input type="text" name="username" id="username" placeholder="Enter your username" <?php global $error;
                                                                                                        if (!empty($error['username']) || !empty($error['account'])) {
                                                                                                            echo "class = 'error'";
                                                                                                        } ?> value="<?php echo set_value('username'); ?>" />
                    <p class="error"> <?php echo form_error('username'); ?></p>
                </div>
                <div class="input-box">
                    <label for="password" class="details">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" <?php global $error;
                                                                                                            if (!empty($error['password']) || !empty($error['account'])) {
                                                                                                                echo "class = 'error'";
                                                                                                            } ?> />
                    <p class="error"> <?php echo form_error('password'); ?></p>
                </div>
            </div>
            <p class="error"> <?php echo form_error('account'); ?></p>
            <div class="button">
                <input type="submit" name="btn-log" value="Login" />
            </div>
        </form>

        <div id="notification-container" class="notification-container">
            <div id="notification-message"></div>
            <div class="progress-bar">
                <div class="progress-bar-inner" id="progress-bar-inner"></div>
            </div>
        </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if (isset($_SESSION['success']) && $_SESSION['success'] != '') { ?>
                const notificationContainer = document.getElementById('notification-container');
                const notificationMessage = document.getElementById('notification-message');
                const progressBarInner = document.getElementById('progress-bar-inner');

                notificationMessage.innerHTML = "<?php echo $_SESSION['success']; ?>";
                notificationContainer.style.display = 'block';
                progressBarInner.style.width = '0%';
                setTimeout(() => {
                    progressBarInner.style.width = '100%';
                }, 10);

                setTimeout(() => {
                    window.location.href = "admin";
                }, 2250);
                <?php unset($_SESSION['success']); ?>
            <?php } ?>
        });
    </script>
</body>

</html>