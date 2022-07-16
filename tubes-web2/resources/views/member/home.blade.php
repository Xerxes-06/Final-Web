<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- REMIX ICON -->
		<link
		href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
		rel="stylesheet"
		/>

		<!-- SWIPER JS -->
		<link
		rel="stylesheet"
		href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
		/>
		<link rel="stylesheet" href="{{ asset('asset/css/swiper-bundle.min.css') }}" />

		<!-- CSS -->
		<link rel="stylesheet" href="{{ asset('asset/css/style4.css') }}" />

		<title>Kelompok 2</title>
	</head>
	<body>
        <!-- NAVBAR -->
        <header class="header" id="header">
            <nav class="nav">
                <a href="{{ route('member.home') }}" class="nav__logo">
                    <img src="{{ asset('asset/img/logo.png') }}" />
                </a>
                <div class="navbar">
                    <div class="nav__menu" id="nav-menu">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="#" class="nav__link active-link">Home</a>
                            </li>
                            <li class="nav__item dropdown">
                                <a href="#profile" class="nav__link dropdown__link active-link">Profil <i class="ri-arrow-down-s-line dropdown__icon"></i></a>
                                <ul class="dropdown__menu">
                                    @foreach ($biodatas as $biodata)
                                        <li class="dropdown__item">
                                            <a href="{{ route('member.biodata.show', $biodata->id) }}" class="dropdown-nav__link">
                                                <div>{{ $biodata->nama_lengkap }}</div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav__item">
                                <a href="{{ route('member.login.logout') }}" class="nav__link">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- NAVBAR -->

		<main class="main">
            <!-- HOMEPAGE -->
            <section class="home" id="home">
                <img src="{{ asset('asset/img/homepageeeee.jpg') }}" alt="" class="home__img" />
                <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__data-subtitle">Pemrograman Web 2</span>
                    <h1 class="home__data-title">
                    <span class="no-auto-input">BUAT BIODATAMU</span>
                    <br />BERSAMA
                    <span class="auto-input"></span>
                    </h1>
                </div>
                </div>
            </section>

            <!-- KEUNTUNGAN -->
            <section class="keuntungan section">
                <div class="keuntungan__container container grid">
                <div class="keuntungan__information">
                    <img
                    src="{{ asset('asset/img/personal.png') }}"
                    class="keuntungan__img"
                    />
                    <h2 class="keuntungan__title">
                    Data <br />
                    Personal
                    </h2>
                </div>
                <div class="keuntungan__information">
                    <img
                    src="{{ asset('asset/img/pendidikan.png') }}"
                    class="keuntungan__img"
                    />
                    <h2 class="keuntungan__title">
                    Data <br />
                    Pendidikan
                    </h2>
                </div>
                <div class="keuntungan__information">
                    <img
                    src="{{ asset('asset/img/keluarga.png') }}"
                    class="keuntungan__img"
                    />
                    <h2 class="keuntungan__title">
                    Data <br />
                    Keluarga
                    </h2>
                </div>
                </div>
            </section>

            <!-- TESTIMONIAL -->
            <section class="testimonial section" id="profile">
                <div class="testimonial__container container swiper-container">
                <h1 class="testimonial__title">Profile</h1>
                <p class="testimonial__subtitle">Profile yang telah terdaftar</p>
                <div class="swiper-wrapper">
                    @foreach ($biodatas as $biodata)
                        <!-- Testimonial 1 -->
                        <div class="testimonial__content swiper-slide">
                            <a href="{{ route('member.biodata.show', $biodata->id) }}">
                                <div class="testimonial__data">
                                    <div class="testimonial__header">
                                        <img
                                            src="{{ asset('storage/foto/'.$biodata->foto) }}"
                                            class="testimonial__img"
                                        />
                                        <div>
                                            <div class="testimonial__name">
                                                <p>{{ $biodata->nama_lengkap }}</p>
                                            </div>
                                            <span class="testimonial__client">{{ $biodata->nim }}</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="testimonial__description">
                                    {{ $biodata->deskripsi }}
                                </p>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination swiper-pagination-testimonial"></div>
                </div>
            </section>
        </main>
	
		

		<!-- TYPED JS -->
		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

		<!-- SWIPER JS -->
		<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
		<script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>

		<!-- JAVASCRIPT -->
		<script src="{{ asset('asset/js/script3.js') }}"></script>
	</body>
</html>
