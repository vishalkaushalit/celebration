<?php 
    $baseUrl = '';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Celebration</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="<?php echo $baseUrl; ?>/assets/css/style.css" rel="stylesheet" />
  <link href="<?php echo $baseUrl; ?>/assets/css/responsive.css" rel="stylesheet" />

  <script src="<?php echo $baseUrl; ?>/assets/js/script.js"></script>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <!-- Google Fonts -->
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap");
  </style>

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <header class="header_sec">
    <nav class="spotlight_header py-2 container">
      <a href=""><img src="<?php echo $baseUrl; ?>/assets/images/spotlight.webp" alt="spotlight" /></a>
      <div class="d-flex gap-2 gap-md-3">
        <a href="https://webcelebration.codknox.com/my-bookings" title="booking"
          class="spotlight_btn spotlight_btn_orange_outline spo"><img src="<?php echo $baseUrl; ?>/assets/images/calendar-tick.webp"
            alt="calendar-tick" />
          <p>My Bookings</p>
        </a>
        <a href="https://webcelebration.codknox.com" title="Login" class="spotlight_btn"><i class="bi bi-person"></i>
          <p>Login</p>
        </a>
      </div>
    </nav>
    <hr class="m-0" />
  </header>