<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>E-materail | Profindo Sekuritas Indonesia</title>

    @include('includes.style')

</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/brand/logo-white.png') }}" class="header-brand-img" alt="">
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form">
                            <span class="login100-form-title pb-5">
                                Login
                            </span>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class="mx-0"><a href="#tab5" class="active"
                                                    data-bs-toggle="tab">Email</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <form id="form_login">
                                            <div class="input-group">
                                                <a href="javascript:void(0)"
                                                    class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="border-start-0 form-control ms-0" type="email"
                                                    placeholder="Email" name="email" id="email">
                                            </div>
                                            <div class="input-group">
                                                <a href="javascript:void(0)"
                                                    class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="border-start-0 form-control ms-0" type="password"
                                                    placeholder="Password" id="password" name="password">
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <button type="submit" id="btn_submit"
                                                    class="btn-block btn-lg btn-primary">
                                                    Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->
    <!-- JQUERY JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Color Theme js -->
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- GENERATE OTP JS -->
    <script>
        let env_link = '{{ env('LINK_DEVELOPMENT') }}'
    </script>

    <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('src/utility.js') }}"></script>
    <script src="{{ asset('src/main.js') }}"></script>
    <script src="{{ asset('src/auth.js') }}"></script>
    <script>
        AuthController.init('{{ csrf_token() }}')
    </script>

</body>

</html>
