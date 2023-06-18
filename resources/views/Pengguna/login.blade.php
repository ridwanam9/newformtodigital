<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToFormDigital | Login</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css?v=3.2.0')}}">
    <script nonce="8dda1e6a-fdb3-4f6a-9a5a-423f3ef09158">
    (function(w, d) {
        ! function(bv, bw, bx, by) {
            bv[bx] = bv[bx] || {};
            bv[bx].executed = [];
            bv.zaraz = {
                deferred: [],
                listeners: []
            };
            bv.zaraz.q = [];
            bv.zaraz._f = function(bz) {
                return function() {
                    var bA = Array.prototype.slice.call(arguments);
                    bv.zaraz.q.push({
                        m: bz,
                        a: bA
                    })
                }
            };
            for (const bB of ["track", "set", "debug"]) bv.zaraz[bB] = bv.zaraz._f(bB);
            bv.zaraz.init = () => {
                var bC = bw.getElementsByTagName(by)[0],
                    bD = bw.createElement(by),
                    bE = bw.getElementsByTagName("title")[0];
                bE && (bv[bx].t = bw.getElementsByTagName("title")[0].text);
                bv[bx].x = Math.random();
                bv[bx].w = bv.screen.width;
                bv[bx].h = bv.screen.height;
                bv[bx].j = bv.innerHeight;
                bv[bx].e = bv.innerWidth;
                bv[bx].l = bv.location.href;
                bv[bx].r = bw.referrer;
                bv[bx].k = bv.screen.colorDepth;
                bv[bx].n = bw.characterSet;
                bv[bx].o = (new Date).getTimezoneOffset();
                if (bv.dataLayer)
                    for (const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ, bK) => ({
                            ...bJ[1],
                            ...bK[1]
                        }))))) zaraz.set(bI[0], bI[1], {
                        scope: "page"
                    });
                bv[bx].q = [];
                for (; bv.zaraz.q.length;) {
                    const bL = bv.zaraz.q.shift();
                    bv[bx].q.push(bL)
                }
                bD.defer = !0;
                for (const bM of [localStorage, sessionStorage]) Object.keys(bM || {}).filter((bO => bO
                    .startsWith("_zaraz_"))).forEach((bN => {
                    try {
                        bv[bx]["z_" + bN.slice(7)] = JSON.parse(bM.getItem(bN))
                    } catch {
                        bv[bx]["z_" + bN.slice(7)] = bM.getItem(bN)
                    }
                }));
                bD.referrerPolicy = "origin";
                bD.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bv[bx])));
                bC.parentNode.insertBefore(bD, bC)
            };
            ["complete", "interactive"].includes(bw.readyState) ? zaraz.init() : bv.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
    </script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-success">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>ToForm</b>Digital</a>
                <p class="login-box-msg">RS PKU Muhammadiyah Gamping</p>
            </div>
            <div class="card-body">
                <form action="{{route('postlogin')}}" method="post" id="login-form">
                    {{ csrf_field() }}
                    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block" id="login-button">Login</button>
                        </div>
                    </div>
                </form>

                <script>
                const form = document.getElementById('login-form');
                const email = document.querySelector('input[name="email"]');
                const password = document.querySelector('input[name="password"]');

                form.addEventListener('submit', (event) => {
                    let isValid = true;

                    // Validate email
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(email.value)) {
                        isValid = false;
                        email.classList.add('is-invalid');
                    } else {
                        email.classList.remove('is-invalid');
                    }

                    // Validate password
                    if (password.value.length < 3) {
                        isValid = false;
                        password.classList.add('is-invalid');
                    } else {
                        password.classList.remove('is-invalid');
                    }

                    // Submit form or show error message
                    if (!isValid) {
                        event.preventDefault();
                        const errorMessage = document.createElement('div');
                        errorMessage.classList.add('invalid-feedback');
                        errorMessage.textContent =
                        'Please enter a valid email and password (min. 6 characters)';
                        form.appendChild(errorMessage);
                    }
                });
                </script>
                <br>

                <p class="mb-0">
                    <p>Don't have an account? <a href="{{ route('register') }}" class="text-center">Register</a></p>
                    
                </p>
            </div>

        </div>

    </div>


    <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('AdminLTE/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
</body>

</html>