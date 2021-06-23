<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="https://themekita.com/demo-atlantis-bootstrap/livepreview/examples/assets/img/icon.ico"
        type="image/x-icon" />
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts and icons -->
    <script src="{{ asset('template/assets/') }}/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['{{ asset('template/assets/') }}/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('template/assets/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('template/assets/') }}/css/atlantis.css">
    @livewireStyles()
</head>

<body class="login" style="
overflow: hidden;
">
    <div class="col-md-12 wrapper wrapper-login wrapper-login-full p-0 bg-white">
        <div class="login-aside col-lg-8 col-md-8 d-flex flex-column align-items-center justify-content-center text-center"
            style="
            background: url('https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_1000/https://www.oyorooms.com/id/blog/wp-content/uploads/2019/11/mandeh-2.jpeg');
            background-size: cover;
            background-position: bottom center;
            ">
        </div>
        <div class="login-aside col-lg-4 col-md-4 d-flex align-items-center justify-content-center bg-white">

            <main class="py-4">
                <center>
                    <img src="{{ asset('/template') }}/assets/img/logo_pbs.png" class="img-responsive">
                </center>
                {{ $slot }}
            </main>

        </div>
    </div>
    @livewireScripts()

    <script src="{{ asset('template/assets/') }}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{ asset('template/assets/') }}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{ asset('template/assets/') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('template/assets/') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('template/assets/') }}/js/atlantis.min.js"></script>
</body>

</html>
