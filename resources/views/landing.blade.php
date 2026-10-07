@extends('layouts.app')

@section('title', 'Draque — Kisah yang bikin hati berdebar')

@section('content')
<main class="landing-page">
    <nav class="landing-nav">
        <div class="landing-nav-inner">
            <a class="brand" href="{{ route('landing') }}" aria-label="Draque, beranda">
                <span class="brand-mark">♡</span>
                <span>Draque<span class="brand-period">.</span></span>
            </a>

            <div class="landing-links">
                <a href="#cerita">Cerita pilihan</a>
                <a href="#tentang">Kenapa Draque?</a>
            </div>

            <div class="landing-actions">
                @auth
                    <a class="landing-login" href="{{ route('home') }}">Beranda</a>
                    <a class="btn btn-draque landing-cta" href="{{ route('home') }}">Lanjut nonton <span aria-hidden="true">→</span></a>
                @else
                    <a class="landing-login" href="{{ route('login') }}">Masuk</a>
                    <a class="btn btn-draque landing-cta" href="{{ route('register') }}">Gabung gratis <span aria-hidden="true">→</span></a>
                @endauth
            </div>
        </div>
    </nav>

    <section class="landing-hero">
        <div class="hero-glow hero-glow-one"></div>
        <div class="hero-glow hero-glow-two"></div>
        <div class="landing-hero-inner">
            <div class="hero-copy">
                <span class="hero-kicker"><span class="kicker-star">✦</span> RUANG KECIL UNTUK CERITA BESAR</span>
                <h1>Jatuh cinta lagi,<br>di <span>setiap cerita.</span></h1>
                <p class="hero-description">Dari tatapan pertama sampai episode terakhir—temukan kisah yang bikin kamu senyum, deg-degan, lalu ingin nonton satu episode lagi.</p>
                <div class="hero-actions">
                    @auth
                        <a class="btn btn-draque hero-primary" href="{{ route('home') }}">Temukan ceritamu <span aria-hidden="true">→</span></a>
                    @else
                        <a class="btn btn-draque hero-primary" href="{{ route('register') }}">Mulai perjalananmu <span aria-hidden="true">→</span></a>
                    @endauth
                    <a class="hero-secondary" href="#cerita"><span class="secondary-play">▶</span> Lihat cerita pilihan</a>
                </div>
                <div class="hero-social-proof">
                    <div class="avatar-stack" aria-hidden="true"><span>N</span><span>J</span><span>A</span><span>♡</span></div>
                    <p><strong>Tempat nyaman</strong> untuk para pecinta dracin</p>
                </div>
            </div>

            <div class="hero-showcase" aria-label="Pilihan cerita Draque">
                <div class="showcase-orbit showcase-orbit-one"></div>
                <div class="showcase-orbit showcase-orbit-two"></div>
                <div class="floating-note note-top"><span>✦</span> YOUR NEXT FAVORITE</div>
                <article class="hero-poster">
                    <div class="hero-poster-art">
                        <span class="poster-moon">◔</span>
                        <span class="poster-silhouette silhouette-one"></span>
                        <span class="poster-silhouette silhouette-two"></span>
                        <span class="poster-flower">✿</span>
                        <span class="poster-vertical">雨 · 花 · 心</span>
                        <div class="poster-title">
                            <span>SEBUAH CERITA TENTANG KITA</span>
                            <strong>Di Bawah<br>Langit yang Sama</strong>
                        </div>
                        <span class="poster-play" aria-hidden="true">▶</span>
                    </div>
                    <div class="hero-poster-meta">
                        <div><span class="meta-label">PILIHAN MINGGU INI</span><strong>Di Bawah Langit yang Sama</strong></div>
                        <span class="rating-pill">♡ 9.8</span>
                    </div>
                </article>
                <div class="floating-note note-bottom"><span class="note-live"></span> Satu episode lagi?</div>
                <span class="showcase-sparkle sparkle-a">✦</span>
                <span class="showcase-sparkle sparkle-b">✧</span>
            </div>
        </div>
        <a class="scroll-cue" href="#cerita"><span></span> GULIR UNTUK MENEMUKAN</a>
    </section>

    <section id="cerita" class="landing-stories">
        <div class="landing-section-inner">
            <div class="landing-section-heading">
                <div>
                    <span class="landing-eyebrow">PILIHAN DENGAN SEPENUH HATI</span>
                    <h2>Satu cerita, <span>banyak rasa.</span></h2>
                </div>
                <a class="all-stories-link" href="{{ auth()->check() ? route('home') : route('register') }}">Temukan favoritmu <span aria-hidden="true">↗</span></a>
            </div>

            <div class="landing-story-grid">
                <article class="landing-story-card">
                    <div class="landing-story-art story-art-rain">
                        <span class="landing-story-label">ROMANSA</span><span class="story-art-icon">☂</span>
                        <span class="story-art-title">Sebelum<br>Hujan Reda</span><span class="story-art-detail">Sebuah kisah tentang pulang.</span>
                    </div>
                    <div class="landing-story-info"><div><h3>Sebelum Hujan Reda</h3><p>Saat hujan mempertemukan dua orang asing.</p></div><span class="story-rating">♡ 9.6</span></div>
                </article>
                <article class="landing-story-card">
                    <div class="landing-story-art story-art-bloom">
                        <span class="landing-story-label">SLICE OF LIFE</span><span class="story-art-icon">✿</span>
                        <span class="story-art-title">Bunga di<br>Musim Semi</span><span class="story-art-detail">Pelan-pelan, hati pun mekar.</span>
                    </div>
                    <div class="landing-story-info"><div><h3>Bunga di Musim Semi</h3><p>Surat lama, janji yang masih terasa.</p></div><span class="story-rating">♡ 9.8</span></div>
                </article>
                <article class="landing-story-card">
                    <div class="landing-story-art story-art-dusk">
                        <span class="landing-story-label">KOMEDI ROMANTIS</span><span class="story-art-icon">☾</span>
                        <span class="story-art-title">Kebetulan<br>Jatuh Cinta</span><span class="story-art-detail">Musuh sekamar. Mungkin juga jodoh.</span>
                    </div>
                    <div class="landing-story-info"><div><h3>Kebetulan Jatuh Cinta</h3><p>Ribut kecil yang berubah jadi rindu.</p></div><span class="story-rating">♡ 9.5</span></div>
                </article>
            </div>
        </div>
    </section>

    <section id="tentang" class="landing-features">
        <div class="landing-section-inner features-inner">
            <div class="features-intro">
                <span class="landing-eyebrow">BUKAN CUMA NONTON</span>
                <h2>Tempat ceritamu<br><span>menemukan rumah.</span></h2>
                <p>Santai, cari cerita, lalu biarkan episode berikutnya membawamu ke mana saja.</p>
                @guest
                    <a href="{{ route('register') }}" class="feature-link">Mulai gratis hari ini <span aria-hidden="true">→</span></a>
                @else
                    <a href="{{ route('home') }}" class="feature-link">Lanjutkan ke beranda <span aria-hidden="true">→</span></a>
                @endguest
            </div>
            <div class="feature-list">
                <article class="feature-item"><span class="feature-icon icon-heart">♡</span><div><h3>Pilihan penuh perasaan</h3><p>Temukan romansa, persahabatan, dan kisah yang terasa dekat.</p></div><span class="feature-number">01</span></article>
                <article class="feature-item"><span class="feature-icon icon-spark">✦</span><div><h3>Nyaman untuk dijelajahi</h3><p>Tempat sederhana dengan satu tujuan: bikin waktu luangmu lebih manis.</p></div><span class="feature-number">02</span></article>
                <article class="feature-item"><span class="feature-icon icon-play">▶</span><div><h3>Cerita baru menunggumu</h3><p>Masuk, pilih suasana hati, dan temukan kisah berikutnya.</p></div><span class="feature-number">03</span></article>
            </div>
        </div>
    </section>

    <footer class="landing-footer">
        <div class="landing-footer-inner">
            <a class="brand" href="{{ route('landing') }}"><span class="brand-mark">♡</span><span>Draque<span class="brand-period">.</span></span></a>
            <p>Untuk hati yang suka cerita <span>♥</span></p>
            <span class="footer-copyright">© {{ date('Y') }} Draque. Dibuat dengan sepenuh hati.</span>
        </div>
    </footer>
</main>
@endsection
