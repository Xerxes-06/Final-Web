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
		<link rel="stylesheet" href="{{ asset('asset/css/style5.css') }}" />

		<title>Kelompok 2 | {{ $biodata->nama_panggilan }}</title>
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
                                <a href="{{ route('member.home') }}" class="nav__link active-link">Home</a>
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
                    <span class="no-auto-input">{{ $biodata->nama_lengkap }}</span>
                    </h1>
                </div>
                </div>
            </section>
            <div class="bio container">
                <div class="bio-img">
                    <img src="{{ asset('storage/foto/'.$biodata->foto) }}" />
                </div>
                <div class="bio-section">
                    <div class="bio-title">
                        <h1>{{ $biodata->nama_lengkap }}</h1>
                        <h3>{{ $biodata->status }}</h3>
                    </div>
                    <p class="bio-subtitle">{{ $biodata->deskripsi }}</p>
                    <div class="bio-content">
                        <div class="bio-sticky">
                            <div class="bio-tab">
                                <p class="bio-tab-filter bio-active">Biodata</p>
                                <p class="bio-tab-filter">Pendidikan</p>
                                <p class="bio-tab-filter">Data Keluarga</p>
                            </div>
                            <div class="bio-indicator">
                                <div></div>
                            </div>
                        </div>
                        <div class="bio-data">
                            <div class="bio-data-personal bio-active">
                                <div>
                                    <p class="question">Nama Lengkap</p>
                                    <p class="answer">{{ $biodata->nama_lengkap }}</p>
                                </div>
                                <div>
                                    <p class="question">Nama Panggilan</p>
                                    <p class="answer">{{ $biodata->nama_panggilan }}</p>
                                </div>
                                <div>
                                    <p class="question">Status</p>
                                    <p class="answer">{{ $biodata->status }}</p>
                                </div>
                                <div>
                                    <p class="question">NIM</p>
                                    <p class="answer">{{ $biodata->nim }}</p>
                                </div>
                                <div>
                                    <p class="question">Jurusan</p>
                                    <p class="answer">{{ $biodata->jurusan }}</p>
                                </div>
                                <div>
                                    <p class="question">Fakultas</p>
                                    <p class="answer">{{ $biodata->fakultas }}</p>
                                </div>
                                <div>
                                    <p class="question">Alamat Email</p>
                                    <p class="answer">{{ $biodata->email }}</p>
                                </div>
                                <div>
                                    <p class="question">Jenis Kelamin</p>
                                    <p class="answer">{{ $biodata->jenis_kelamin }}</p>
                                </div>
                                <div>
                                    <p class="question">Agama</p>
                                    <p class="answer">{{ $biodata->agama }}</p>
                                </div>                        
                                <div>
                                    <p class="question">Kewarganegaraan</p>
                                    <p class="answer">{{ $biodata->kewarganegaraan }}</p>
                                </div>
                                <div>
                                    <p class="question">Cita - Cita</p>
                                    <p class="answer">{{ $biodata->cita_cita }}</p>
                                </div>
                                <div>
                                    <p class="question">Alamat</p>
                                    <p class="answer">{{ $biodata->alamat }}</p>
                                </div>
                                <div>
                                    <p class="question">No. HP</p>
                                    <p class="answer">{{ $biodata->no_hp }}</p>
                                </div>
                            </div>
                            <div class="bio-data-pendidikan">
                                <div>
                                    <p class="question">Taman Kanak Kanak</p>
                                    <p class="answer">{{ $biodata->tk }}</p>
                                </div>
                                <div>
                                    <p class="question">Sekolah Dasar</p>
                                    <p class="answer">{{ $biodata->sd }}</p>
                                </div>
                                <div>
                                    <p class="question">Sekolah Menengah Pertama</p>
                                    <p class="answer">{{ $biodata->smp }}</p>
                                </div>
                                <div>
                                    <p class="question">Sekolah Menengah Atas</p>
                                    <p class="answer">{{ $biodata->sma }}</p>
                                </div>
                                <div>
                                    <p class="question">Perguruan Tinggi</p>
                                    <p class="answer">{{ $biodata->kuliah }}</p>
                                </div>
                            </div>
                            <div class="bio-data-keluarga">
                                <div>
                                    <p class="question">Nama Ayah</p>
                                    <p class="answer">{{ $biodata->nama_ayah }}</p>
                                </div>
                                <div>
                                    <p class="question">Nama Ibu</p>
                                    <p class="answer">{{ $biodata->nama_ibu }}</p>
                                </div>
                                <div>
                                    <p class="question">Pekerjaan Ayah</p>
                                    <p class="answer">{{ $biodata->pekerjaan_ayah }}</p>
                                </div>
                                <div>
                                    <p class="question">Pekerjaan Ibu</p>
                                    <p class="answer">{{ $biodata->pekerjaan_ibu }}</p>
                                </div>
                                <div>
                                    <p class="question">Alamat</p>
                                    <p class="answer">{{ $biodata->alamat_ortu }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

		<!-- JAVASCRIPT -->
		<script src="{{ asset('asset/js/script3.js') }}"></script>
		<script src="{{ asset('asset/js/script4.js') }}"></script>
	</body>
</html>
