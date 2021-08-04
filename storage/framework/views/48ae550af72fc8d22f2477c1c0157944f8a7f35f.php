<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <router-link to="/movies" class="nav-link">
                <i class="nav-icon fas fa-list orange"></i>
                <p>
                    Movie
                </p>
            </router-link>
        </li>


      <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
        <li class="nav-item">
          <router-link to="/users" class="nav-link">
            <i class="fa fa-users nav-icon blue"></i>
            <p>Users</p>
          </router-link>
        </li>
      <?php endif; ?>





























      <li class="nav-item">
        <a href="#" class="nav-link" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-power-off red"></i>
          <p>
            <?php echo e(__('Logout')); ?>

          </p>
        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
          <?php echo csrf_field(); ?>
        </form>
      </li>
    </ul>
  </nav>
<?php /**PATH D:\Github\laravel-vue-crud-starter-master\resources\views/layouts/sidebar-menu.blade.php ENDPATH**/ ?>