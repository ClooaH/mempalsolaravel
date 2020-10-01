@extends('head')

<body>

    <nav class="navbar navbar-expand navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img id="logo" src="img/logga.svg" alt="Logga"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
                aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">MempaLso</a>
                    </li>
                    <!-- <img src="img/logga.svg" alt="logga" style="height: 3em;">
                <h1 id="title">MempaLso</h1> -->

                    <div id="menuToggle">
                        <input type="checkbox">
                        <span></span>
                        <span></span>
                        <span></span>

                        <ul id="menu">
                            <a class="menu-link" href="/">
                                <li><img src="img/home-white-18dp.svg" alt="home" id="icon">Home</li>
                            </a>
                            <a class="menu-link" href="#learnMorebtn">
                                <li><img src="img/info-white-18dp.svg" alt="info" id="icon">Info</li>
                            </a>
                            <a class="menu-link" href="#forumbtn">
                                <li><img src="img/forum-white-18dp.svg" alt="forum" id="icon">Forum</li>
                            </a>
                        </ul>
                    </div>
                    <!-- <span></span>
                <span></span>
                <span></span> -->
            </div>
    </nav>

    <div class="container h-100">
        <div class="row py-5 my-3 desktop-m">
            <div class="col text-center">
                <p> <b>Lso-Man</b> possibly the best bobbleheaded flailing friendshipsman out there!</p>
                <a href="#learnMorebtn"><button class="btn btn-light" id="learnMorebtn">Learn More</button></a>
            </div>
        </div>

        <div class="row py-5 my-5">
            <div class="col text-center">

                <div class="container text-center">
                    <img src="img/IMG_7522.png" class="img-fluid" alt="Lso-Man!">
                    <p>A simple forum puts Lso-Man in stores!</p>
                </div>

                <a href="#forumbtn"><button class="btn btn-light" id="forumbtn">Forum</button></a>

            </div>
        </div>


        <form method="POST" action="/">
            @csrf

            <div class="row pt-5 pb-3 desktop-m">
                <div class="col text-center">
                    <form>
                        <div class="form-group">
                            <label for="email">
                                <p>Email</p>
                            </label>
                            <input type="email" class="form-control @error('email') is-danger @enderror" id="email" name="email" aria-describedby="emailHelp" value="{{ old('email') }}">
                            <div class="help is-danger">{{ $errors->first('email') }}</div>
                            <small id="emailHelp" class="form-text text-light">By submitting you are agreeing to us using
                                your personlized data to nofity you of when this product is released.
                                This information will be deleted as soon as this product is put forward to the market or
                                released from development.</small>
                        </div>
                </div>
            </div>
            <div class="row pb-5 mb-5 desktop-m">
                <div class="col text-center">

                    <p>I'd pay:</p>
                    <select class="custom-select my-1 mr-sm-2 w-50 @error('sum') is-danger @enderror" id="sum" name="sum">
                    <div class="help is-danger">{{ $errors->first('sum') }}</div>
                        <option selected>Choose...</option>
                        <option value="100">100kr</option>
                        <option value="200">200kr</option>
                        <option value="300">300kr</option>
                    </select>
                    <a href="#subbtn"><button type="submit" class="btn btn-light is-link" id="subbtn">Submit</button></a>
                </div>
            </div>
        </form>

        <div class="row py-5 my-5 field-is-grouped">
            <div class="col text-center">
                <div class="container text-center">
                    <p>Thank you for your answer!</p>
                </div>
                <a href="#"><button class="btn btn-light" id="backtotopbtn">Back to top</button></a>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>

</body>

</html>