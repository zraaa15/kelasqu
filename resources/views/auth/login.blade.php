@extends('layouts.app')

@section('title', 'Masuk ke Draque')

@section('content')
<main class="auth-shell">
    <section class="auth-card">
        <div class="auth-form-panel">
            <a class="brand" href="{{ route('login') }}" aria-label="Draque, beranda">
                <span class="brand-mark">♡</span>
                <span>Draque<span class="brand-period">.</span></span>
            </a>

            <div class="form-heading">
                <span class="eyebrow">SENANG MELIHATMU LAGI</span>
                <h1>Masuk ke dunia <span>ceritamu.</span></h1>
                <p>Siapkan camilan, kisah favoritmu sudah menunggu.</p>
            </div>

            @if (session('status'))
                <div class="alert alert-success py-2" role="status">{{ session('status') }}</div>
            @endif

            <form method="POST" action="{{ route('login.store') }}" class="auth-form">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="nama@email.com" autocomplete="email" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="password" class="form-label">Kata sandi</label>
                    <input id="password" type="password" name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Masukkan kata sandi" autocomplete="current-password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-check remember-check">
                    <input id="remember" type="checkbox" name="remember" value="1" class="form-check-input">
                    <label for="remember" class="form-check-label">Ingat aku di perangkat ini</label>
                </div>

                <button type="submit" class="btn btn-draque w-100">Masuk <span aria-hidden="true">→</span></button>
            </form>

            <p class="switch-auth">Belum punya akun? <a href="{{ route('register') }}">Daftar gratis</a></p>
            <p class="auth-footnote">Dengan masuk, kamu setuju untuk menikmati cerita tanpa batas ♡</p>
        </div>

        <aside class="auth-art login-art" aria-label="Sambutan Draque">
            <div class="art-orbit orbit-one"></div>
            <div class="art-orbit orbit-two"></div>
            <div class="art-copy">
                <span class="art-sparkle">✦</span>
                <p class="art-kicker">SATU AKUN, BANYAK RASA</p>
                <h2>Jatuh cinta lagi.<br>Di setiap episode.</h2>
                <p class="art-description">Temukan kisah-kisah manis yang bikin kamu senyum-senyum sendiri.</p>
                <div class="watching-pill"><span class="online-dot"></span> Tempat nyaman para pecinta dracin</div>
            </div>
            <div class="art-heart heart-one">♡</div>
            <div class="art-heart heart-two">✿</div>
            <div class="art-footer">Dibuat untuk hati yang suka cerita <span>♥</span></div>
        </aside>
    </section>
</main>
@endsection
