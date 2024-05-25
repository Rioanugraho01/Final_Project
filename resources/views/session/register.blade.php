@extends('user-app.app')

@section('content')
 <style>
    /* Tampilan Login */
        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .form-group input {
            width: 100%;
            padding: 10px 0;
            font-size: 13px;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
            background-color: transparent;
        }

        .form-group input:focus,
        .form-group input:valid {
            border-color: transparent;
            border-bottom: 2px solid #007bff;
        }

        .form-group label {
            position: absolute;
            top: 10px;
            left: 0;
            pointer-events: none;
            transition: 0.3s;
        }

        .form-group input:focus+label,
        .form-group input:valid+label {
            top: -10px;
            font-size: 14px;
            color: #007bff;
        }

        .or-divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .or-divider hr {
            flex: 1;
            border: none;
            border-top: 1.5px solid #ffffff;
            margin: 0 15px;
            padding-top: 13px;
        }

        .or-divider p {
            color: #ffffff;
            font-weight: bold;
        }

        /* transisi login */
        @keyframes moveLeft {
            0% { transform: translateX(100%); }
            100% { transform: translateX(0); }
        }

        .move-left {
            animation: moveLeft 1.5s ease-in-out;
        }

        /* Transisi Gambar */
        @keyframes moveDown {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(0); }
        }

        .move-down {
            animation: moveDown 1.5s ease-in-out;
        }

        .form-group .icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none; /* make the icon not clickable */
        }
    </style>
    <section class="container pt-5 mt-2">
        <div class="row">
            <div class="col-6 mb-5 pt-5"><img class="img-fluid move-down" src="{{ asset('assets/register.svg') }}"></div>
            <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                <div class="rounded-5 move-left" style="background-color: #141E27; width: 636px; height: 750px;">
                    <p class="text-light fw-lighter text-center" style="margin-top: 50px;">Logo BeFind</p>
                    <p class="text-light text-center"
                        style="font-family: Platypi, serif; font-size: 30px; margin-top: 60px;">Join for a New Experience.</p>
                    <p class="text-light fw-lighter text-center">Create your account</p>
                    <form role="form text-left" method="POST" action="/register">
                        @csrf
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-group d-flex justify-content-between">
                                        <input class="text-light" type="text" id="text" name="text" required>
                                        <label class="text-light" for="text">Username</label>
                                        @error('username')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group d-flex justify-content-between">
                                        <input class="text-light" type="email" id="email" name="email" required>
                                        <label class="text-light" for="email">Email</label>
                                        @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group d-flex justify-content-between">
                                        <input class="text-light" type="text" id="age" name="age" required>
                                        <label class="text-light" for="age">Age</label>
                                        @error('age')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group d-flex justify-content-between">
                                        <input class="text-light" type="text" id="number" name="number" required>
                                        <label class="text-light" for="number">Phone Number</label>
                                        @error('phone number')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>                            
                                    <div class="form-group">
                                        <input class="text-light" type="password" id="password" name="password" required>
                                        <label class="text-light" for="password">Password</label>
                                        @error('password')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input class="text-light" type="password" id="password" name="password" required>
                                        <label class="text-light" for="password">Confirm Password</label>
                                        @error('confirm password')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="pt-3">
                                        <a href="#"><button type="submit" class="btn btn-outline-light btn-block" style="width: 400px;">Register</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('user-app.footer')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            animateOnScroll();
        });

        window.addEventListener("scroll", function() {
            animateOnScroll();
        });

        function animateOnScroll() {
            var animatedElements = document.querySelectorAll(".animated-element");
            animatedElements.forEach(function(element) {
                if (isElementInViewport(element)) {
                    element.classList.add("visible");
                } else {
                    element.classList.remove("visible");
                }
            });
        }

        function isElementInViewport(el) {
            var rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }
    </script>
@endsection
