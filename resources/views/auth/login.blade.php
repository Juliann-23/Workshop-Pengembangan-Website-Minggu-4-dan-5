<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">

            <div class="col-md-5 col-lg-4">

                <div class="card shadow border-0">

                    <div class="card-body p-4">

                        <h3 class="text-center mb-4">
                            Login Admin
                        </h3>

                        <form>

                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="Masukkan email"
                                >
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    placeholder="Masukkan password"
                                >
                            </div>

                            <a href="{{ route('admin') }}"
                               class="btn btn-primary w-100">
                                Login
                            </a>

                        </form>

                        <div class="text-center mt-3">
                            <a href="{{ route('frontend') }}"
                               class="text-decoration-none">
                                Kembali ke halaman utama
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</body>
</html>
