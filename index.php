<!DOCTYPE html>
<html>
<head>
  <title>Responsive Web Code</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <header>
    <nav>
      <div class="logo">Company Name</div>
      <div class="menu-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul class="menu">
        <?php
          $menuOptions = array("Home", "About", "Services", "Contact");
          foreach ($menuOptions as $option) {
            echo "<li><a href='#'>$option</a></li>";
          }
        ?>
      </ul>
    </nav>
  </header>

  <section class="content">
    <h1>Welcome to Our Website</h1>
    <p>This is a sample content section.</p>
  </section>

  <script src="script.js"></script>
</body>
</html>
