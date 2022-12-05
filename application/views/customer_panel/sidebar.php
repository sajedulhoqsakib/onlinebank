<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Swift Bank</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="<?= base_url('customer_panel/customer_dashboard') ?>" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Transfer</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('customer_panel/transfer') ?>">List</a></li>
                <li><a class="nav-link" href="<?= base_url('customer_panel/transferadd') ?>">Add</a></li>
              </ul>
            </li>
		  </ul>
        </aside>
      </div>
 