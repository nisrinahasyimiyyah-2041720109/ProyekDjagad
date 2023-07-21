<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">User</li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="/admin/member">
          <i class="menu-icon mdi mdi-account"></i>
          <span class="menu-title">Member</span>
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#member" aria-expanded="false" aria-controls="member">
          <i class="menu-icon mdi mdi-account"></i>
          <span class="menu-title">User</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="member">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/member">Manage User</a></li>
          </ul>
        </div>
        <div class="collapse" id="member">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/member/create">Add User</a></li>
          </ul>
        </div>
        {{-- <div class="collapse" id="member">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/datauser">Data User</a></li>
          </ul>
        </div> --}}
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#admin" aria-expanded="false" aria-controls="admin">
          <i class="menu-icon mdi mdi-account-circle-outline"></i>
          <span class="menu-title">Admin</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="admin">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/user">Manage Admin</a></li>
          </ul>
        </div>
        <div class="collapse" id="admin">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/user/create">Add Admin</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Data</li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/datauser">
          <i class="menu-icon mdi mdi-layers-outline"></i>
          <span class="menu-title">Data User</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="menu-icon mdi mdi-card-text-outline"></i>
          <span class="menu-title">Form elements</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#course" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi mdi-book-multiple"></i>
          <span class="menu-title">Bimbel</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="course">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/course">Manage Bimbel</a></li>
          </ul>
        </div>
        <div class="collapse" id="course">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/course/create">Add Bimbel</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/tugas">
          <i class="menu-icon mdi mdi-file-document"></i>
          <span class="menu-title">Tugas</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">Tables</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
          <i class="menu-icon mdi mdi-layers-outline"></i>
          <span class="menu-title">Icons</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="icons">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
          </ul>
        </div>
      </li> --}}
      <li class="nav-item nav-category">Transaction</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#trans" aria-expanded="false" aria-controls="trans">
          <i class="menu-icon mdi mdi-chart-line"></i>
          <span class="menu-title">Transaction</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="trans">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/transaksi">Manage Transaction</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>