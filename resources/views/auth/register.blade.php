@extends('layouts.app')

@section('title', 'Daftar di Draque')

@section('content')
<main class="auth-shell">
    <section class="auth-card">
        <div class="auth-form-panel">
            <a class="brand" href="{{ route('register') }}" aria-label="Draque, beranda">
                <span class="brand-mark">♡</span>
                <span>Draque<span class="brand-period">.</span></span>
            </a>

            <div class="form-heading">
                <span class="eyebrow">MULAI PETUALANGANMU</span>
                <h1>Hai, calon <span>dracin lover!</span></h1>
                <p>Buat akun dan temukan cerita yang bikin hati hangat.</p>
            </div>

            <form method="POST" action="{{ route('register.store') }}" class="auth-form">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama lengkap</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder="Nama panggilanmu" autocomplete="name" required autofocus>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="nama@email.com" autocomplete="email" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Kata sandi</label>
                    <input id="password" type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Minimal 8 karakter" autocomplete="new-password" minlength="8" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Ulangi kata sandi</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        class="form-control" placeholder="Ketik sekali lagi" autocomplete="new-password" minlength="8" required>
                </div>

                <button type="submit" class="btn btn-draque w-100">Buat akun <span aria-hidden="true">→</span></button>
            </form>

            <p class="switch-auth">Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
            <p class="auth-footnote">Gratis, mudah, dan penuh cerita manis ♡</p>
        </div>

        <aside class="auth-art register-art" aria-label="Bergabung dengan Draque">
            <div class="art-orbit orbit-one"></div>
            <div class="art-orbit orbit-two"></div>
            <div class="art-copy">
                <span class="art-sparkle">✦</span>
                <p class="art-kicker">CERITA BARU DIMULAI</p>
                <h2>Tempat semua<br>happy ending tinggal.</h2>
                <p class="art-description">Simpan tontonan favoritmu dan lanjutkan kapan saja, dari mana saja.</p>
                <div class="mini-posters" aria-hidden="true">
                    <span class="mini-poster poster-peach">♡</span>
                    <span class="mini-poster poster-rose">✿</span>
                    <span class="mini-poster poster-lilac">✦</span>
                    <span class="poster-caption">Kisah-kisah baru menantimu</span>
                </div>
            </div>
            <div class="art-heart heart-one">♡</div>
            <div class="art-heart heart-two">✿</div>
            <div class="art-footer">Temukan ceritamu di Draque <span>♥</span></div>
        </aside>
    </section>
</main>
@endsection
