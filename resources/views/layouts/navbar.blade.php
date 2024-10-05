<nav class="main-header navbar d-flex justify-content-between navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        
    </ul>
    <div class="user-panel d-flex align-items-center mr-2">
        <div class="info  d-flex align-items-center">
            <a href="#" class="text-dark d-block">{{ ucfirst(Auth::user()->name) }}</a>
        </div>
        <div class="image d-flex align-items-center">
            <i class='bx bx-user-circle' style="font-size: 1.8rem;"></i>
        </div>
    </div>
</nav>
