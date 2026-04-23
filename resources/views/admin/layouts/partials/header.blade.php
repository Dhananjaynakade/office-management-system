<header class="site-header">
  <a href="{{ url('/admin/dashboard') }}" class="brand-main">
    <img src="{{ asset('/assets/admin/img/office-logo.png') }}" alt="Logo" style="height: 45px; width: 45px; border-radius: 50%; border: 2px solid #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.1); margin-right: 15px;">
    Office Management System
  </a>
  <a href="#" class="nav-toggle">
    <div class="hamburger hamburger--htla">
      <span>toggle menu</span>
    </div>
  </a>

  <ul class="action-list">
    <li>
      <a href="{{ route('logout') }}" 
         onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
         style="color: #fff; font-weight: 500; text-decoration: none; padding-right: 20px;">
        <i class="fa fa-power-off"></i> Logout
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </li>
  </ul>
</header>