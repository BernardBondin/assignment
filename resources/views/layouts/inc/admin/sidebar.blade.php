<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/dashboard') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#employees" aria-expanded="false" aria-controls="employees">
          <i class="mdi mdi-account-circle menu-icon"></i>
          <span class="menu-title">Employees</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="employees">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> 
              <a class="nav-link" href="{{ url('admin/employee/create') }}">Add Employee</a>
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="{{ url('admin/employee') }}">View Employees</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#doctors" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-heart-pulse menu-icon"></i>
          <span class="menu-title">Doctors</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="doctors">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/doctor/create') }}">Add Doctor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/doctor') }}">View Doctors</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>