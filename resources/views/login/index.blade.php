<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RnR | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon-->
    <link rel="icon" href="assets/img/favicon.svg" type="image/svg+xml">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="./assets/css/styles-main.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body class="d-flex align-items-center min-vh-100" style="background-image: url('assets/img/bg-login.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                {{-- Pesan Peringatan --}}
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
                    <form action='/login' method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="nama@contoh.com" autofocus required value={{ old('email') }}>
                            <label for="email">Alamat Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="pasword" placeholder="Password" required>
                            <label for="pasword">Kata Sandi</label>
                        </div>
                        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                    </form>
                    <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Daftar sekarang!</a></small>
                </main>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="./assets/js/scripts.js"></script>
</body>

</html>