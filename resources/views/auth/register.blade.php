<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

    </style>
</head>

<body >
    <section class="vh-100 bg-image" >
        <div class="mask d-flex align-items-center h-100">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form action="{{ route('register.save') }}" method="POST" class="user">
                                    @csrf
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input name="name" type="text" id="form3Example1cg"
                                            class="form-control form-control-lg @error('name') is-invalid @enderror" />
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input name="email" type="email" id="form3Example3cg"
                                            class="form-control form-control-lg @error('email') is-invalid @enderror" />
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input name="alamat" type="text" id="form3Example1cg"
                                            class="form-control form-control-lg @error('alamat') is-invalid @enderror" />
                                        @error('alamat')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <label class="form-label" for="form3Example1cg">Alamat</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input name="no_hp" type="text" id="form3Example1cg"
                                            class="form-control form-control-lg @error('np_hp') is-invalid @enderror" />
                                        @error('no_hp')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <label class="form-label" for="form3Example1cg">NO HP</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input name="password" type="password" id="form3Example4cg"
                                            class="form-control form-control-lg @error('password') is-invalid @enderror" />
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input name="password_confirmation" type="password" id="form3Example4cdg"
                                            class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" />
                                        @error('password_confirmation')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                            href="{{ route('login') }}" class="fw-bold text-body"><u>Login here</u></a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
