<!-- SIDEBAR -->
<section id="sidebar">
    <div class="sidebar-space">
        <a href="{{ route('admin.dashboard') }}" class="brand"><i class='bx bx-globe icon'></i>Pemrograman Web 2</a>
        <ul class="side-menu">
            <li><a href="{{ route('admin.dashboard') }}" class="sidebar-link active"><i class='bx bx-grid-alt icon'></i>Dashboard</a></li>
            <li>
                <a href="#" class="sidebar-link"><i class='bx bx-user icon'></i>Profile<i class='bx bx-chevron-right icon-right' ></i></a>
                <ul class="side-dropdown">
                    <li><a href="#">Masih Error</a></li>
                </ul>
            </li>
            <li><a href="{{ route('admin.about') }}" class="sidebar-link"><i class='bx bx-info-circle icon'></i>About</a></li>
        </ul>
    </div>
    <ul class="side-menu logout">
        <li><a href="{{ route('admin.login.logout') }}"><i class='bx bx-log-out icon'></i>Logout</a></li>
    </ul>
</section>
<!-- SIDEBAR -->