<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="public/css/contact.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <span class="big-circle"></span>
        <img src="public/images/output-shape.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
                <img src="public/images/logo.png" alt="" class="logo">
                <p class="text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                    dolorum adipisci recusandae praesentium dicta!
                </p>

                <div class="info">
                    <div class="information">
                        <img src="public/images/output-location.png" class="icon" alt="" />
                        <p>92 Cherry Drive Uniondale, NY 11553</p>
                    </div>
                    <div class="information">
                        <img src="public/images/output-email.png" class="icon" alt="" />
                        <p>lorem@ipsum.com</p>
                    </div>
                    <div class="information">
                        <img src="public/images/output-phone.png" class="icon" alt="" />
                        <p>123-456-789</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form method="POST" autocomplete="off">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="fullname" class="input <?php global $error;
                                                                        if (!empty($error['name'])) {
                                                                            echo 'error';
                                                                        } ?>" value="<?php echo set_value('fullname'); ?>" />
                        <label for="">Name</label>
                        <span>Name</span>
                        <p class="error"> <?php echo form_error('name'); ?></p>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input <?php global $error;
                                                                        if (!empty($error['email'])) {
                                                                            echo 'error';
                                                                        } ?>" value="<?php echo set_value('email'); ?>" />
                        <label for="">Email</label>
                        <span>Email</span>
                        <p class="error"> <?php echo form_error('email'); ?></p>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input <?php global $error;
                                                                    if (!empty($error['phone'])) {
                                                                        echo 'error';
                                                                    } ?>" value="<?php echo set_value('phone'); ?>" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                        <p class="error"> <?php echo form_error('phone'); ?></p>
                    </div>
                    <div class="input-container">
                        <input type="text" name="company" class="input <?php global $error;
                                                                        if (!empty($error['company'])) {
                                                                            echo 'error';
                                                                        } ?>" value="<?php echo set_value('company'); ?>" />
                        <label for="">Company</label>
                        <span>Company</span>
                        <p class="error"> <?php echo form_error('company'); ?></p>
                    </div>
                    <div class="input-container">
                        <input type="text" name="role" class="input <?php global $error;
                                                                    if (!empty($error['role'])) {
                                                                        echo 'error';
                                                                    } ?>" value="<?php echo set_value('role'); ?>" />
                        <label for="">Role</label>
                        <span>Role</span>
                        <p class="error"> <?php echo form_error('role'); ?></p>
                    </div>
                    <div class="input-container">
                        <input type="text" name="enquiry" class="input <?php global $error;
                                                                        if (!empty($error['enquiry'])) {
                                                                            echo 'error';
                                                                        } ?>" value="<?php echo set_value('enquiry'); ?>" />
                        <label for="">Enquiry</label>
                        <span>Enquiry</span>
                        <p class="error"> <?php echo form_error('enquiry'); ?></p>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input <?php global $error;
                                                                if (!empty($error['message'])) {
                                                                    echo 'error';
                                                                } ?>"><?php echo set_value('message'); ?></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                        <p class="error"> <?php echo form_error('message'); ?></p>
                    </div>
                    <div class="list-btn">
                        <input type="submit" name="send-mail" value="Send" class="btn" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="public/js/app.js"></script>
    <script>
        <?php
        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        ?>
            Swal.fire({
                title: "<?php echo $_SESSION['status']; ?>",
                icon: "success",
            });
        <?php
            unset($_SESSION['status']);
        }
        ?>
    </script>
</body>

</html>