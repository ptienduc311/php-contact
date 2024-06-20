<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <base href="<?php echo base_url(); ?>" />
  <title>DataLynx</title>
  <link href="public/css/bootstrap-4.4.1.css" rel="stylesheet" />
  <link href="public/css/styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="container">
    <H1OrDk>Hello and Welcome to Datalynx test sub-domain</H1OrDk>
    <br/><br/>

    <a href="contact">
      <button type="button" class="btn tools-btn-sm">Contact</button>
    </a>
    <br/><br/>

    <a href="home">
      <button type="button" class="btn tools-btn-sm">Home</button>
    </a>
    <br/><br/>

    <a href="admin/contact">
      <button type="button" class="btn tools-btn-sm">Admin</button>
    </a>
    <br/><br/>

    <a href="#">
      <button type="button" class="btn tools-btn-sm">About</button>
    </a>

    <br><br>
    <H1OrDk>Redirect to contact</H1OrDk>
    <br>
    <form action="contact" method="post">
      <button type="submit" name="button" value="Product to contact" class="btn tools-btn-sm" style="height: auto;">Product to contact</button>
      <br/><br/>

      <button type="submit" name="button" value="Services to contact" class="btn tools-btn-sm" style="height: auto;">Services to contact</button>
    </form>

    
    <br/><br/>
  </div>

  <script src="public/js/jquery-3.4.1.min.js"></script>

  <script src="public/js/popper.min.js"></script>
  <script src="public/js/bootstrap-4.4.1.js"></script>
</body>

</html>