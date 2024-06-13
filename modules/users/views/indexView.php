<?php
  $email = $_SESSION['email'];
  $data = getInfoUser($email);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="public/css/info-user.css" />
  <title>User information</title>
</head>

<body>
  <div class="container">
    <div class="header-reg">
      <div class="img">
        <img src="public/images/logo.png" alt="" class="logo" />
      </div>
    </div>
    <div class="info-reg">
      <div class="title">User information</div>
      <a href="?mod=users&action=logout" class="btn btn-logout">Logout</a>
      <a href="?mod=users&action=contact" class="btn btn-contact">Contact</a>
    </div>

    <form method="POST">
      <div class="user-details">
        <div class="input-box">
          <label for="name" class="details">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your name" value="<?php echo $data['name']; ?>"/>
        </div>
        <div class="input-box">
          <label for="email" class="details">Email</label>
          <input type="text" name="email" id="email" placeholder="Enter your email" value="<?php echo $data['email']; ?>" readonly/>
        </div>
        <div class="input-box">
          <label for="phone" class="details">Phone number</label>
          <input type="text" name="phone" id="phone" placeholder="Enter your phone" value="<?php echo $data['phone']; ?>"/>
        </div>
        <div class="input-box">
          <label for="company" class="details">Company</label>
          <input type="text" name="company" id="company" placeholder="Enter your company" value="<?php echo $data['company']; ?>"/>
        </div>
        <div class="input-box">
          <label for="role" class="details">Role</label>
          <input type="text" name="role" id="role" placeholder="Enter your role" value="<?php echo $data['role']; ?>"/>
        </div>
        <div class="input-box">
          <label for="enquiry" class="details">Enquiry</label>
          <input type="text" name="enquiry" id="enquiry" placeholder="Enter your enquiry" value="<?php echo $data['enquiry']; ?>"/>
        </div>
      </div>
      <div class="button">
        <input type="submit" name="btn-update" value="Update" />
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
