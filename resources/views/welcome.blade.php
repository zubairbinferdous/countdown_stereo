<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" rel="image/x-icon" href="{{asset('/images/fav.jpeg')}}">
    <link rel="stylesheet" href="./css/style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #FFFFFF;
        }

        .mg {
            margin: 0px;
            padding: 0px;
        }

        .data {
            text-align: center;
            width: 100%;
            line-height: 20px;
            padding: 24% 0%;
        }

        .part1 {
            height: 100vh;
        }

        .part2 {
            height: 100vh;
            position: relative;
        }

        .bar {
            width: 6px;
            height: 100vh;
            background-color: #24262b;
            position: absolute;
            top: 0;
            left: 0px;
        }

        .m0 {
            margin-left: 0px;
        }


        .we {
            font-size: 45px;
            text-transform: uppercase;
            font-weight: 900;
        }

        /* span.loading {
            font-size: 80px;
            animation: flash 4s infinite;
        } */

        #demo {
            padding-top: 3%;
            padding-bottom: 3%;
            font-weight: 900;
        }

        .data a {
            color: rgb(255, 255, 255);
        }

        .button {
            padding: 16px 38px;
            background-color: #24262b;
            font-size: 15px;
            text-transform: uppercase;
            font-weight: 900;
            text-decoration: none;
            margin-top: 2%;
            display: inline-block;
            transition: all linear .3s;
            transform: skew(-11deg);
        }

        .clock {
            font-size: 30px;
            font-weight: 900;
        }

        #blur.active {
            filter: blur(20px);
            pointer-events: none;
            user-select: none;
        }

        #pop {
            width: 80%;
            height: 80%;
            background: #000000;
            position: fixed;
            top: 10%;
            left: 10%;
            margin: auto;
            box-shadow: 0px 5px 30px rgb(49 49 49);
            visibility: hidden;
            opacity: 0;
            transition: 0.5s;
        }

        .popUp {
            position: relative;
        }

        .button2 {
            padding: 10px 24px;
            background-color: #ebebeb;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 900;
            text-decoration: none;
            margin-top: 2%;
            display: inline-block;
            transition: all linear .3s;
            transform: skew(0deg);
            position: absolute;
            top: 2px;
            right: 2%;
            color: #000000;
        }

        .button3 {
            padding: 10px 24px;
    font-size: 26px;
    text-transform: uppercase;
    font-weight: 900;
    margin-top: 2%;
    display: inline-block;
    transition: all linear .3s;
    position: absolute;
    top: 12%;
    right: 11%;
    color: #ffffff;
        }

        .button4 {
            padding: 10px 24px;
    font-size: 26px;
    text-transform: uppercase;
    font-weight: 900;
    margin-top: 2%;
    display: inline-block;
    transition: all linear .3s;
    position: absolute;
    top: 21%;
    right: 15%;
    color: #ffffff;
        }

        .bottom {
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 900;
            margin-top: 2%;
            display: inline-block;
            transition: all linear .3s;
            position: absolute;
            bottom: 2px;
            right: 2%;
            color: #000000;
        }

        #pop.active {
            visibility: visible;
            opacity: 1;
            transition: 0.5s;
        }

        .form input {
            width: 90%;
            display: inline-block;
            height: 45px;
            border: 0px;
            margin-bottom: 40px;
            padding-left: 20px;
            font-size: 15px;
            font-weight: 900;
        }

        .form input:focus {
            outline: 0px;
        }

        .popUpp {
            margin-top: 20%;
        }

        .submit {
            padding: 10px 20px;
            font-weight: 900;
        }

        .tc {
            color: #ebebeb;
            font-weight: 900;
            font-size: 15px;
            margin-top: -30px;
            margin-right: 30px;
        }

        .countDown {
            position: relative;
        }

        .data_img2 {
            position: absolute;
            right: 32%;
            top: -25%;
        }

        .bgimg {
            background-image: url("{{ asset('/images/img1.jpeg') }}") ;
            background-repeat: no-repeat;
            background-size: cover;
            background-position:0% 5%;
            width: 100%;
            height: 100%;
        }

        .mt {
               padding-top: 45px;
    margin-left: 30px;
        }

        .dis {
            color: #FFFF00;
            font-size: 40px;
        }

        .data_img{
           padding: 20px 30px;
           margin-top: 53%;
        } 
        .data_img img{
            animation: fadeInUp 4s 1 ;
        }

        span.loading {
            font-size: 80px;
            animation:flash  4s infinite;
            width: 500px;
            height: 100vh;

        }

        .bar img {
            height:100%;
        }

        .data_dis{
            padding-bottom: 50px;
        }

        .data_dis{
            padding: 50px 0px 0px 0px;
        }
        .data_dis p{
            margin: 0;
            padding: 0;
            font-size: 26px;
    text-transform: uppercase;
    font-weight: 900;
    color: #ffffff;
        }

        
        


        @media (max-width: 576px) {
            .part2 {
                visibility: hidden;
                opacity: 0;
                display: none;
            }
        .button3 {

            font-size: 15px;

        }

        .bgimg{
            visibility: hidden;
                opacity: 0;
                display: none;
        }

        .button4 {
 
         font-size: 15px;
         top: 17%;
  
        }

        }
    </style>
</head>


<body>
    <div class="container-fluid" id="blur">
        <div class="row">
            <div class="col-lg-8 col-sm-12 part1 mg">
                <div class="data">
                    <div class="countDown">
                        <div class="data_img2 "><img src="{{asset('/images/gif.gif')}}" alt=""></div>
                        <h1 class="we">we are on <span class="loading aanimate__animated animate__flash">loading</span>
                            phase </h1>
                    </div>
                    <p id="demo" class="clock"></p>
                    <a href="#" class="button" id="join" onclick="toggle()">join us</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-0 part2">
                <div class="bar">
                    <!-- <img src="./img/Comp_6.gif" alt=""> -->
                </div>
                <div class="data_img">
           
                    <img src="{{asset("/images/side.jpeg")}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div id="pop">
        <a href="#" class="button2" id="join" onclick="toggle()">close</a>
     
        <div class="row">
            <div class="col-md-6 col-sm-0">
                <div class="bgimg"></div>
                <!-- <img src="{{asset(" ./images/img1.jpeg")}}" alt="" class="img-fluid"> -->
            </div>
            <div class="col-md-6 col-sm-12 ">
                <div class="data_dis text-center">
                    <p class="">Get your <span class="dis">20%</span>  discount </p>
                    <p class="">on launching day!</p>
                </div>
                <div class="row">
                <form action=" {{ route('contact') }} " class="form mt" method="POST">
                    @csrf
                    <input type="text" placeholder="Name" name="name"  required>
                    <input type="email" placeholder="Email" name="email" required>
                    <button type="submit" class="submit">Count me in !</button>
                </form>
            </div>
            </div>
        </div>
        <p class="tc text-end bottom">*T&C applied</p>
    </div>
    </div>
    <script type="text/javascript">
        // popup-js 
        function toggle() {
            var blur = document.getElementById('blur');
            blur.classList.toggle('active');

            var pop = document.getElementById('pop');
            pop.classList.toggle('active');
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 1, 2023 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = days + " day , " + hours + " hours , "
                + minutes + " minute , " + seconds + " second";
            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);

        
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
</body>

</html>
    {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div> --}}