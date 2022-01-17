<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> <!-- Boxiocns CDN Link -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
   </head>
<body>

    <!--sidebar start-->
  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bx-log-in'></i>
      <span class="logo_name">Admin Panel</span>
    </div>
    <ul class="nav-links">
        <!--dashboard-->
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>

      <!--Categories-->
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Categories</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Categories</a></li>
          <li><a href="categories.php">Add Categories</a></li>
          <li><a href="viewcategories.php">View Categories</a></li>
          <li><a href="#"></a></li>
        </ul>
      </li>

      <!--subcategories-->
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Sub Categories</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Sub Categories</a></li>
          <li><a href="subcategories.php">Add Subcategories</a></li>
          <li><a href="viewsubcategories.php">View Subcategories</a></li>
          <li><a href="#"></a></li>
        </ul>
      </li>

      <!--Products-->

      <li>
        <div class="iocn-link">
          <a href="#">
            <!-- <i class='bx bx-book-alt' ></i> -->
            <i class='bx bxl-product-hunt'></i>
            <span class="link_name">Products</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
          
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Products</a></li>
          <li><a href="products.php">Add Products</a></li>
          <li><a href="viewproducts.php">View Products</a></li>
          <li><a href="#"></a></li>
        </ul>
      </li>

      <!--Orders-->

      <li>
        <a href="#">
          <!-- <i class='bx bx-pie-chart-alt-2' ></i> -->
          <i class='bx bx-border-all'></i>
          <span class="link_name">Orders</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="vieworders.php">Orders</a></li>
        </ul>
      </li>
 
      <!--Users-->
      <li>
        <a href="#">
          <!-- <i class='bx bx-pie-chart-alt-2' ></i> -->
          <i class='bx bxs-user'></i>
          <span class="link_name">Users</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="viewusers.php">Users</a></li>
        </ul>
      </li>

      <!--Analytics-->
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>

      <!--Chart-->
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      
      <!--Setting-->
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>

      <!--pofile log out-->
      <li>
    <div class="profile-details">
      <div class="profile-content">
      <img src="assets/images/profilepic.png" alt="profileImg">

      </div>
      <div class="name-job">
        <div class="profile_name">Ashish Kumar</div>
        <div class="job">Admin</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <!--sidebar end-->

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Admin Panel</span>
      
    </div>
    
        <div class="main">
            <div class="box_container">
            <div class="box"><h5>Products</h5> <h3>50 +</h3></div>
            <div class="box"><h5>New Users <h3>101 + </h3></h5></div>
            <div class="box"><h5>New Orders</h5> <h3>555 +</h3></div>
            <div class="box"><h5>Total Profit</h5> <h3>7.5M +</h3></div>
            </div>
        </div>
    
    
    
  </section>

  <footer style="height:50px; text-align:center;">Copyright &copy; 2022 All Right Reserved.  Made with love by Ashish.</footer>

  
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
</body>
</html>
