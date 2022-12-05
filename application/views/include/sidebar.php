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
              <a href="<?= base_url('dashboard') ?>" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown <?= $this->session->userdata('logged_in')['type']=='employee'?'d-none':''; ?>">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Employee</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('employee') ?>">List</a></li>
                <li><a class="nav-link" href="<?= base_url('employeeadd') ?>">Add</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Customer</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('customer') ?>">List</a></li>
                <li><a class="nav-link" href="<?= base_url('customeradd') ?>">Add</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Transfer</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('transfer') ?>">List</a></li>
                <li><a class="nav-link" href="<?= base_url('transferadd') ?>">Add</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Transfer Credit</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('transfercr') ?>">List</a></li>
                <li><a class="nav-link" href="<?= base_url('transfercradd') ?>">Add</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Transfer Debit</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url('transferdr') ?>">List</a></li>
                <li><a class="nav-link" href="<?= base_url('transferdradd') ?>">Add</a></li>
              </ul>
            </li>
		  </ul>
        </aside>
      </div>
 