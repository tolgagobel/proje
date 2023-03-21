<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Üye Ol</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="../backend/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="../backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../backend/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../backend/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="../backend/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="index.html" class="d-inline-block auth-logo">
                                <img src="assets/images/logo-light.png" alt="" height="20">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">Üye Ol</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5 class="text-primary">Yeni Hesabını Oluştur</h5>
                            </div>
                            <div class="p-2 mt-4">
                                    <form class="needs-validation" role="form" method="POST" action="{{ route('user.signupPost') }}">
                                        {{ csrf_field() }}
                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" id="useremail" value="{{ old('email') }}" placeholder="Email" required >
                                        <div class="invalid-feedback">
                                            Please enter email
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Ad Soyad <span class="text-danger">*</span></label>
                                        <input type="text" name="namesurname" class="form-control" id="username" value="{{ old('namesurname') }}" placeholder="Ad Soyad"  required>
                                        <div class="invalid-feedback">
                                            Please enter username
                                        </div>
                                    </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Cep Telefonu <span class="text-danger">*</span></label>
                                            <input type="phone" name="phone" class="form-control" id="phone" value="{{ old('phone') }}" placeholder="Telefon"  required>
                                            <div class="invalid-feedback">
                                                Please enter username
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Şifre</label>
                                            <div class="col-md-12">
                                                <input id="password" type="password" class="form-control" name="password" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password-confirm" class="form-label">Şifre (tekrar)</label>
                                            <div class="col-md-12">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>


                                    <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                        <h5 class="fs-13">Password must contain:</h5>
                                        <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                        <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                        <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                        <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">Kaydol</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="fs-13 mb-4 title text-muted">Create account with</h5>
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                            <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                            <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="mt-4 text-center">
                        <p class="mb-0">Hesabınız Var Mı ? <a href="{{ route('admin.login') }}" class="fw-semibold text-primary text-decoration-underline"> Giriş Yapın </a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">&copy;
                            <script>document.write(new Date().getFullYear())</script> Procollec Teknoloji Mühendislik
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->
<script src="../backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../backend/assets/libs/simplebar/simplebar.min.js"></script>
<script src="../backend/assets/libs/node-waves/waves.min.js"></script>
<script src="../backend/assets/libs/feather-icons/feather.min.js"></script>
<script src="../backend/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="../backend/assets/js/plugins.js"></script>

<!-- particles js -->
<script src="../backend/assets/libs/particles.js/particles.js"></script>
<!-- particles app js -->
<script src="../backend/assets/js/pages/particles.app.js"></script>
<!-- validation init -->
<script src="../backend/assets/js/pages/form-validation.init.js"></script>
<!-- password create init -->
<script src="../backend/assets/js/pages/passowrd-create.init.js"></script>
</body>

</html>
