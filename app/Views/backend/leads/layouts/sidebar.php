<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="<?= base_url('/account/dashboard') ?>">
      <span class="sidebar-brand-text align-middle">
        <img src="<?= base_url('public/assets/images/page/logo-omega_wy.png') ?>" alt="Omega Education Group" style="height:60px; width: auto;">
      </span>
      <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5"
        stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
        <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
        <path d="M20 12L12 16L4 12"></path>
        <path d="M20 16L12 20L4 16"></path>
      </svg>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url('/account/dashboard') ?>">
          <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>

      <!-- <li class="sidebar-item">
        <a data-bs-target="#request" data-bs-toggle="collapse" class="sidebar-link collapsed">
          <i class="align-middle" data-feather="bookmark"></i> <span class="align-middle">Request</span>
        </a>
        <ul id="request" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
          <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('/account/request/assets') ?>">
              <span class="align-middle">IT Assets</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('/account/request/tickets') ?>">
              <span class="align-middle">Tickets</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('/account/request/services') ?>">
              <span class="align-middle">Services</span>
            </a>
          </li>
        </ul>
      </li> -->
      
      <li class="sidebar-item">
        <hr>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url('/account/logout') ?>">
          <i class="align-middle" data-feather="unlock"></i> <span class="align-middle">Log out</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
