<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item ">
        <a href="/" class="nav-link {{ request()-> is('/') ? 'active' : ' '}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
             Dashboard
            </p>
        </a>
        </li>
        <li class="nav-item">
            <a href="/guru" class="nav-link {{ request()-> is('guru') ? 'active' : ' '}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                 guru
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/siswa" class="nav-link {{ request()-> is('siswa') ? 'active' : ' '}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                 siswa
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/user" class="nav-link {{ request()-> is('user') ? 'active' : ' '}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                 user
                </p>
            </a>
        </li>
        <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dropdown
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="../../index.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard v1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../index2.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard v2</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../index3.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard v3</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>