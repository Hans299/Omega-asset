<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="<?= base_url('/account/dashboard') ?>">
      <span class="sidebar-brand-text align-middle">
        Aktivo
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
        <a class="sidebar-link" href="<?= base_url('/account/') ?>">
          <i class="align-middle" data-feather="bookmark"></i> <span class="align-middle"></span>
        </a>
      </li> -->
      <li class="sidebar-item">
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
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url('/account/transaction/purchase-order') ?>">
          <i class="align-middle" data-feather="file-plus"></i> <span class="align-middle">Purchase Order</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a data-bs-target="#inventory" data-bs-toggle="collapse" class="sidebar-link collapsed">
          <i class="align-middle" data-feather="tag"></i> <span class="align-middle">Inventory</span>
        </a>
        <ul id="inventory" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
          <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('/account/assets') ?>">
              <span class="align-middle">Assets</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('/account/accessories') ?>">
              <span class="align-middle">Accessories</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('/account/licenses') ?>">
              <span class="align-middle">Licenses</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url('/account/products') ?>">
          <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Products</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a data-bs-target="#people" data-bs-toggle="collapse" class="sidebar-link collapsed">
          <i class="align-middle" data-feather="users"></i> <span class="align-middle">People</span>
        </a>
        <ul id="people" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
          <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('/account/people/employees') ?>">
              <span class="align-middle">Employees</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('/account/people/users') ?>">
              <span class="align-middle">Users</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="<?= base_url('/account/people/vendors') ?>">
              <span class="align-middle">Vendors</span>
            </a>
          </li>
        </ul>
      </li>


      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url('/account/reports') ?>">
          <i class="align-middle" data-feather="pie-chart"></i> <span class="align-middle">Reports</span>
        </a>
      </li>
      <li class="sidebar-item">
        <hr>
      </li>
      <!-- <li class="sidebar-item">
        <a data-bs-target="#preferences" data-bs-toggle="collapse" class="sidebar-link collapsed">
          <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Preferences</span>
        </a>
        <ul id="preferences" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
          <li class="sidebar-item">
            <a data-bs-target="#asset-settings" data-bs-toggle="collapse" class="sidebar-link collapsed">Asset Settings</a>
            <ul id="asset-settings" class="sidebar-dropdown list-unstyled collapse">
              <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('/settings/asset/brand') ?>">Brand</a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('/settings/asset/category') ?>">Category</a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('/settings/asset/subcategory') ?>">Subcategory</a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('/settings/asset/type') ?>">Type</a></li>
            </ul>
          </li>
        </ul>
        <ul id="preferences" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
          <li class="sidebar-item">
            <a data-bs-target="#ticket-settings" data-bs-toggle="collapse" class="sidebar-link collapsed">Ticket Settings</a>
            <ul id="ticket-settings" class="sidebar-dropdown list-unstyled collapse">
              <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('/settings/ticket/type') ?>">Type</a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('/settings/ticket/priority') ?>">Priority</a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('/settings/ticket/component') ?>">Component</a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('/settings/ticket/status') ?>">Status</a></li>
            </ul>
          </li>
        </ul>
        <ul id="preferences" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
          <li class="sidebar-item">
            <a data-bs-target="#user-settings" data-bs-toggle="collapse" class="sidebar-link collapsed">User Settings</a>
            <ul id="user-settings" class="sidebar-dropdown list-unstyled collapse">
              <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('/settings/user/permission') ?>">Permission</a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('/settings/user/role') ?>">Role</a></li>
              <li class="sidebar-item"><a class="sidebar-link" href="<?= base_url('/settings/user/user-role') ?>">User Role</a></li>
            </ul>
          </li>
        </ul>
      </li> -->
      <li class="sidebar-item">
        <a class="sidebar-link" href="<?= base_url('/account/logout') ?>">
          <i class="align-middle" data-feather="unlock"></i> <span class="align-middle">Log out</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
