<!-- NAVBAR -->
<nav>
    <i class='bx bx-menu toggle-sidebar' ></i>
    <p class="hello">Selamat datang <b>{{ auth()->user()->nama }}</b></p>
    <div class="profile">
        <img src="https://www.rancahpost.com/wp-content/uploads/2022/01/Cara-Mengunci-Foto-Profil-FB.png" alt="">
        <ul class="profile-link">
            <li><a href="{{ route('admin.login.logout') }}"><i class='bx bx-log-out' ></i> Logout</a></li>
        </ul>
    </div>
</nav>
<!-- NAVBAR --> 