<!-- Navbar -->
      <style>
        #login-nav {
          
          z-index: 1038;
          padding: 0.3em 2.5em !important;
        }
        
      </style>




      <nav class="w-100 px-2 py-1 navbar navbar-expand-sm bg-info navbar-dark border border-top-0 border-right-0 border-left-0" id="login-nav">
        <div class="d-flex justify-content-between w-100">
          <div>
            <a class="mx-2 text-light text-decoration-none font-weight-bolder" href="#" data-toggle="collapse" data-target="#translate">Translate</a>
            <div id="translate" class="collapse">
              <div id="google_translate_element"></div>
            </div>
            <script type="text/javascript">
              function googleTranslateElementInit()
              {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
              }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

          </div>
          <div>
            <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') ==3): ?>
              
              
              <div class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle text-reset text-decoration-none font-weight-bolder" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mx-2">Hello, <?= !empty($_settings->userdata('username')) ? $_settings->userdata('username') : $_settings->userdata('email') ?></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="./?page=manage_account">Manage Account</a>
                  <a class="dropdown-item" href="<?= base_url.'classes/Login.php?f=logout_client' ?>">Logout</a>
                </div>



              </div>
            <?php else: ?>
              <a href="./login.php" class="mx-2 text-light text-decoration-none font-weight-bolder">
                Login</a> | 
              <a href="./register.php" class="mx-2 text-light text-decoration-none font-weight-bolder">Register</a>
            <?php endif; ?>
          </div>
        </div>
      </nav>

      <a href="./index.php"><img src="./uploads/banner.png" height="210px" width="100%"  alt="Banner"></a>

      <nav class="navbar navbar-expand-sm bg-primary navbar-dark border border-bottom-0 border-right-0 border-left-0" id='top-Nav'>
        
        <div class="container">         

          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="./" class="nav-link <?= isset($page) && $page =='home' ? "active" : "" ?>">Home</a>
              </li>
              <li class="nav-item">
                <a href="./?page=products" class="nav-link <?= isset($page) && $page =='products' ? "active" : "" ?>">Products</a>
              </li>
              <li class="nav-item">
                <a href="./?page=about" class="nav-link <?= isset($page) && $page =='about' ? "active" : "" ?>">About Us</a>
              </li>
              <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') == 3): ?>
              <li class="nav-item">
                <?php 
                $cart_count = $conn->query("SELECT sum(quantity) FROM `cart_list` where client_id = '{$_settings->userdata('id')}'")->fetch_array()[0];
                $cart_count = $cart_count > 0 ? $cart_count : 0;
                ?>
                <a href="./?page=orders/cart" class="nav-link <?= isset($page) && $page =='orders/cart' ? "active" : "" ?>"><span class="badge badge-secondary rounded-cirlce"><?= format_num($cart_count) ?></span> Cart</a>
              </li>
              <li class="nav-item">
                <a href="./?page=orders/my_orders" class="nav-link <?= isset($page) && $page =='orders/my_orders' ? "active" : "" ?>">My Orders</a>
              </li>
              <?php endif; ?>
            </ul>
          </div>
          <!-- Right navbar links -->
          <div class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <button class="navbar-toggler order-1 border-0 text-sm" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
      </nav>
      <!-- /.navbar -->
      <script>
        $(function(){
          
        })
      </script>