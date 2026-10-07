@extends('layouts.app')

@section('title', 'Beranda — Draque')

@section('content')
<main class="home-page">
    <nav class="navbar navbar-expand-lg draque-nav">
        <div class="container">
            <a class="brand" href="{{ route('home') }}">
                <span class="brand-mark">♡</span>
                <span>Draque<span class="brand-period">.</span></span>
            </a>
            <div class="d-flex align-items-center gap-3">
                <span class="welcome-user d-none d-sm-inline">Hai, {{ auth()->user()->name }} ✨</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-draque">Keluar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container home-content">
        <section class="welcome-banner">
            <div class="welcome-text">
                <span class="eyebrow">SELAMAT DATANG DI DRAQUE</span>
                <h1>Waktunya <span>baper</span> lagi, {{ auth()->user()->name }} ♡</h1>
                <p>Pilih cerita yang pas dengan suasana hatimu hari ini.</p>
                <a href="#pilihan-cerita" class="btn btn-draque">Jelajahi cerita <span aria-hidden="true">↓</span></a>
            </div>
            <div class="welcome-decoration" aria-hidden="true">
                <span class="welcome-play">▶</span>
                <span class="welcome-heart">♡</span>
                <span class="welcome-sparkle">✦</span>
            </div>
        </section>

        <section id="pilihan-cerita" class="story-section">
            <div class="section-heading">
                <div>
                    <span class="eyebrow">PILIHAN UNTUKMU</span>
                    <h2>Cerita yang bikin <span>senyum-senyum</span></h2>
                </div>
                <span class="section-note">Pilihan manis minggu ini ✿</span>
            </div>

            <div class="row g-4">
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="story-card">
                        <div class="story-poster poster-sunset"><span class="poster-symbol">☼</span><span class="poster-tag">ROMANSA</span></div>
                        <div class="story-info"><h3>Senja di Kota Hujan</h3><p>Dua hati, satu payung, dan pertemuan yang tak disengaja.</p><span class="story-meta">♡ 24 episode · Manis & hangat</span></div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="story-card">
                        <div class="story-poster poster-blossom"><span class="poster-symbol">✿</span><span class="poster-tag">SLICE OF LIFE</span></div>
                        <div class="story-info"><h3>Janji di Balik Bunga</h3><p>Surat lama membawa mereka kembali pada janji masa kecil.</p><span class="story-meta">♡ 18 episode · Bikin baper</span></div>
                    </article>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <article class="story-card">
                        <div class="story-poster poster-dusk"><span class="poster-symbol">☾</span><span class="poster-tag">KOMEDI ROMANTIS</span></div>
                        <div class="story-info"><h3>Satu Langit, Dua Hati</h3><p>Teman sekamar yang selalu bertengkar, tapi saling peduli.</p><span class="story-meta">♡ 20 episode · Lucu & gemas</span></div>
                    </article>
                </div>
            </div>
        </section>

        <footer class="home-footer">Draque <span>♥</span> ruang kecil untuk cerita besar.</footer>
    </div>
</main>
@endsection
