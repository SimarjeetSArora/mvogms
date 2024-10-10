<h1 class="">Welcome to SABLE Admin Side</h1>
<hr>
<div class="row">
  <div class="col-12 col-sm-4 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-th-list"></i></span>
     
      <div class="info-box-content">
         <a href="<?php echo base_url ?>admin/?page=categories">
        <span class="info-box-text">Total Categories</span>
        <span class="iinfo-box-number text-right h4">
          <?php 
            $total = $conn->query("SELECT count(id) as total FROM category_list where delete_flag = 0 ")->fetch_assoc()['total'];
            echo format_num($total);
          ?>
          <?php ?>
        </span>
      </a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <div class="col-12 col-sm-4 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-dark elevation-1"><i class="fas fa-th-list"></i></span>
      <div class="info-box-content">
      <a href="<?php echo base_url ?>admin/?page=shop_types">

        <span class="info-box-text">Total NGO Type</span>
        <span class="iinfo-box-number text-right h4">
          <?php 
            $total = $conn->query("SELECT count(id) as total FROM shop_type_list where delete_flag = 0 ")->fetch_assoc()['total'];
            echo format_num($total);
          ?>
          <?php ?>
        </span>
        </a>
      </div>

      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <div class="col-12 col-sm-4 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-secondary elevation-1"><i class="fas fa-boxes"></i></span>

      <div class="info-box-content">
        <a href="<?php echo base_url ?>admin/?page=products">
        <span class="info-box-text">Total Products</span>
        <span class="iinfo-box-number text-right h4">
          <?php 
            $total = $conn->query("SELECT count(id) as total FROM product_list where delete_flag = 0 ")->fetch_assoc()['total'];
            echo format_num($total);
          ?>
          <?php ?>
        </span>
      </a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <div class="col-12 col-sm-4 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-light border elevation-1"><i class="fas fa-users"></i></span>
<a href="<?php echo base_url ?>admin/?page=temp_vendors">
      <div class="info-box-content">
        <span class="info-box-text">Total NGOs</span>
        <span class="iinfo-box-number text-right h4">
          <?php 
            $total = $conn->query("SELECT count(id) as total FROM vendor_list where delete_flag = 0 ")->fetch_assoc()['total'];
            echo format_num($total);
          ?>
          <?php ?>
        </span>
      </a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>


  <div class="col-12 col-sm-4 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-maroon elevation-1"><i class="fas fa-user-friends"></i></span>
<a href="<?php echo base_url ?>admin/?page=clients">
      <div class="info-box-content">
        <span class="info-box-text">Users</span>
        <span class="iinfo-box-number text-right h4">
          <?php 
            $total = $conn->query("SELECT count(id) as total FROM client_list where delete_flag = 0 ")->fetch_assoc()['total'];
            echo format_num($total);
          ?>
          <?php ?>
        </span>
      </a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <div class="col-12 col-sm-4 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-warning elevation-1"><i class="fas fa-list"></i></span>

      <div class="info-box-content">
         <a href="<?php echo base_url ?>admin/?page=orders">
        <span class="info-box-text">Total Orders</span>
        <span class="iinfo-box-number text-right h4">
          <?php 
            $total = $conn->query("SELECT count(id) as total FROM order_list")->fetch_assoc()['total'];
            echo format_num($total);
          ?>
          <?php ?>
        </span>
      </a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>

