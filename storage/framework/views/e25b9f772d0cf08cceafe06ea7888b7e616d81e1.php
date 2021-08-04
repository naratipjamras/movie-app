<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'Laravel')); ?></title>


  <link rel="stylesheet" href="<?php echo e(mix('/css/app.css')); ?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->











  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <router-link to="/dashboard" class="brand-link">
      <img src="<?php echo e(asset('/images/logo.png')); ?>" alt="The Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo e(config('app.name', 'Laravel')); ?></span>
    </router-link>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
        <router-link to="/profile">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="<?php echo e(auth()->user()->photo); ?>" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">

                  <?php echo e(Auth::user()->name); ?>

                  <span class="d-block text-muted">
                    <?php echo e(Ucfirst(Auth::user()->type)); ?>

                  </span>
              </div>
          </div>
        </router-link>

      <!-- Sidebar Menu -->
      <?php echo $__env->make('layouts.sidebar-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  
  <div class="content-wrapper">
    

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <router-view></router-view>

    <vue-progress-bar></vue-progress-bar>

    
  </div>
  

  
  <footer class="main-footer">
    
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0
    </div>
    

  </footer>
</div>


<?php if(auth()->guard()->check()): ?>
<script>
    window.user = <?php echo json_encode(auth()->user(), 15, 512) ?>
</script>
<?php endif; ?>
<script src="<?php echo e(mix('/js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\Github\laravel-vue-crud-starter-master\resources\views/layouts/master.blade.php ENDPATH**/ ?>