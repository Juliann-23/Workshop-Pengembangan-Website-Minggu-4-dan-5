<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - Minimarket</title>

    <!-- Font -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        crossorigin="anonymous"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous"
    >

    <!-- AdminLTE -->
    <link
        rel="stylesheet"
        href="{{ asset('assets/admin/css/adminlte.css') }}"
    >
</head>

<body class="login-page bg-body-secondary">

    <div class="login-box">

        <!-- Logo / Judul -->
        <div class="login-logo">
            <b>Minimarket</b>
        </div>

        <div class="card">

            <div class="card-body login-card-body">

                <p class="login-box-msg">
                    Silakan login untuk melanjutkan
                </p>

                {{-- Error login --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Status session --}}
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Email --}}
                    <div class="input-group mb-3">
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email') }}"
                            placeholder="Email"
                            required
                            autofocus
                        >

                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="input-group mb-3">
                        <input
                            type="password"
                            name="password"
                            class="form-control"
                            placeholder="Password"
                            required
                        >

                        <div class="input-group-text">
                            <span class="bi bi-lock"></span>
                        </div>
                    </div>

                    {{-- Remember + Login --}}
                    <div class="row">

                        <div class="col-8">
                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="remember"
                                    id="remember"
                                >

                                <label
                                    class="form-check-label"
                                    for="remember"
                                >
                                    Ingat saya
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="d-grid">
                                <button
                                    type="submit"
                                    class="btn btn-primary"
                                >
                                    Masuk
                                </button>
                            </div>
                        </div>

                    </div>
                </form>

                <div class="mt-3 text-center">

                    @if (Route::has('password.request'))
                        <p class="mb-2">
                            <a href="{{ route('password.request') }}">
                                Lupa password?
                            </a>
                        </p>
                    @endif

                    @if (Route::has('register'))
                        <p class="mb-0">
                            Belum punya akun?
                            <a href="{{ route('register') }}">
                                Daftar
                            </a>
                        </p>
                    @endif

                </div>

            </div>

        </div>

    </div>

</body>

</html>
