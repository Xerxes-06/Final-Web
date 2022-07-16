@extends('admin.layouts.base')

@section('title', 'About')

@section('content')
    <div class="bio2">
        <div class="bio-section2">
            <p class="bio-subtitle2">
                Tugas ini dibuat untuk memenuhi Tugas Besar Mata Kuliah Praktikum
                <b>"Pemrograman Web"</b> dengan tema <b>"Biodata"</b> menggunakan
                Framework PHP yaitu Laravel. Puji syukur kami panjatkan kehadiran
                Tuhan Yang Maha Esa, karena atas berkah dan rahmatnya kami
                diberikan kesempatan untuk membuat website ini. Dan terima kasih
                kepada Asisten Dosen kami yaitu Kak <b>Muh. Pahri Yaman</b> dan
                Kak <b>Zulhisham Ramli</b> yang telah memberikan kesempatan untuk
                kami menyelesaikan Tugas Besar ini. Kami berharap tugas ini dapat
                berguna bagi masyarakat dan mahasiswa/I dalam pengembangan
                pembuatan website dengan tema yang serupa.
            </p>
            <div class="bio-content2">
                <div class="bio-data2">
                    <div class="bio-data-about2">
                        <div class="bio-data-grid2">
                            <div class="bio-data-section2">
                                <i class="bx bx-book-bookmark"></i>
                                <div>
                                    <p class="data-title2">Mata Kuliah</p>
                                    <p class="data-subtitle2">PEMROGRAMAN WEB 2</p>
                                </div>
                            </div>
                            <div class="bio-data-section2">
                                <i class="bx bx-calendar"></i>
                                <div>
                                    <p class="data-title2">Tahun Ajaran</p>
                                    <p class="data-subtitle2">2021 - 2022</p>
                                </div>
                            </div>
                        </div>

                        <div class="bio-data-section2">
                            <i class="bx bx-user"></i>
                            <div>
                                <p class="data-title2">Nama Dosen</p>
                                <p class="data-subtitle2">
                                ASEP INDRA SYAHYADI, S. Kom., M.Kom
                                </p>
                            </div>
                        </div>
                        <div class="bio-data-section2">
                            <i class="bx bx-group"></i>
                            <div>
                                <p class="data-title2">Nama Asisten Dosen</p>
                                <p class="data-subtitle2">
                                MUHAMMAD PAHRI YAMAN <br />
                                ZULHISHAM RAMLI
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bio-img2">
            <img src="{{ asset('asset/img/uin.png') }}" />
        </div>
    </div>
@endsection