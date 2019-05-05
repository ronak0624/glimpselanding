<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139153976-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-139153976-1');
    </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Glimpse Wearables</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <!-- IMG popup CSS -->
    <link href="resources/magnific-popup/magnific-popup.css" rel="stylesheet">
    

    <!-- Stylesheet -->
    <link href="css/glimpse.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php include 'navbar.html';?>
    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1>
                        <strong>You live the moment, we'll capture it</strong>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <section style="padding: 0; padding-top: 6em;" id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Glimpse Cam</h2>
                    <hr class="my-4">
                </div>
            </div>
            <div class="row flex-column-reverse flex-md-row py-5">
                <div class="col-md text-center order-last">
                    <img id="band" class="img-fluid js-scroll-trigger" src="img/headbandRyan.png" alt="ellipse">
                </div>
                <div class="col-md text-center order-first align-self-center pt-4">
                    <h1>Keep your eyes <br> on what matters</h1>
                    <p>No more fumbling for your phone or staring at a screen,
                        <br> just enjoy the show and let Glimpse Cam take care of the rest
                    </p>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md text-center">
                    <img id="camera" class="img-fluid js-scroll-trigger" src="img/camera.png" alt="ellipse">
                </div>
                <div class="col-md text-center align-self-center pt-4">
                    <h1>Capture what you see</h1>
                    <p>with 1080p video, Hi-Def Audio, and motion stabilization shot at 30fps,
                        Uploaded to the companion app immediately.
                    </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="mobileapp.html">Mobile App</a>
                </div>
            </div>
            <div class="row flex-column-reverse flex-md-row py-5">
                <div class="col-md">
                    <div class="animContainer">
                        <img src="img/retroactiveshot.jpg" alt="">
                        <img src="img/retroactiveshot.jpg" alt="">
                        <img src="img/retroactiveshot.jpg" alt="">
                        <img src="img/retroactiveshot.jpg" alt="">
                        <img src="img/retroactiveshot.jpg" alt="">
                        <img src="img/retroactiveshot.jpg" alt="">
                        <img src="img/retroactiveshot.jpg" alt="">
                        <img src="img/retroactiveshot.jpg" alt="">
                    </div>

                    <div class="infoLine text-center px-5">
                        <hr>
                        <span style="float: right">10sec</span>
                        <img class="tap" src="img/tapicon.png" alt="tap">
                        <span style="float: left">-10sec</span>
                    </div>
                    <div class="text-center">
                        <h1>Never miss a moment</h1>
                        <p>
                            Save 10 seconds before and after
                            <br>
                            with the push of a button.
                        </p>
                    </div>
                </div>
                <div class="col-md text-center">
                    <img id="head" class="img-fluid js-scroll-trigger" src="img/button.png" alt="ellipse">
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md text-center">
                    <img id="head" class="img-fluid js-scroll-trigger" src="img/band.png" alt="ellipse">
                </div>
                <div class="col-md  text-center align-self-center pt-4">
                    <h1>Lasts all night long</h1>
                    <p>With a high capacity battery, and sweat resistant, comfortable fabric
                        <br>you'll forget it's there.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <form class="betaform text-center" method="post" action="send_mail.php">
        <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Beta test at your next concert!</h1>
        </div>
        <div class="form-label-group text-left">
            <input type="text" name="first_name" placeholder="Name" required>
            <label for="name">Name</label>
        </div>
        <div class="form-label-group text-left">
            <input type="next_show" name="next_show" placeholder="Next Show" required>
            <label for="next_show">Next Show</label>
        </div>
        <div class="form-label-group text-left">
            <input type="email" name="email_address" placeholder="E-Mail" required>
            <label for="email">E-Mail</label>
        </div>
        <div id="filter-input" class="form-label-group text-left">
            <input type="num" name="phone_number" placeholder="Phone Number">
            <label for="number">Phone Number</label>
        </div>
        <button class="btn btn-primary btn-xl js-scroll-trigger" type="submit">Submit</button>
    </form>
    </section>
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>

    <!-- Plugin JavaScript -->
    <script src="resources/jquery-easing/jquery.easing.min.js"></script>
    <script src="resources/scrollreveal/scrollreveal.min.js"></script>
    <script src="resources/magnific-popup/jquery.magnific-popup.min.js"></script>
    

    <!-- Custom scripts for this template -->
    <script src="js/glimpse.js"></script>
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                var preloader = document.getElementById('preloader');
                $(preloader).fadeOut(400, function () {
                    preloader.parentNode.removeChild(preloader);
                });
            }, 5000);
        });
    </script>

</body>

</html>