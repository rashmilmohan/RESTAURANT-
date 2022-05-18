<header class="header">

   <div class="flex">

    <!-- <a href="home.php" class="logo">Owen & Engine</a>-->
      <img src="Images/logo.png" width="175" class="nav-logo" alt="logo">

      <nav class="navbar">
         <!--<a href="admin.php">add products</a>-->
         <a href="products.php" style= "position: right;">view products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>