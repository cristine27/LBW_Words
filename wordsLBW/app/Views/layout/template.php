<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="../Css/style.css">
    <!-- W3Schools css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $title; ?></title>
</head>

<body>

    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <div id="preRes" class="container-fluid px-4">
        <div class="row">
            <div class="col">
                <div class="row justify-content-center py-2">
                    <div class="col-8 my-2">
                        <h1 class="text-center">Oxford Dictionary</h1>
                        <p class="text-center ">
                            The Oxford English Dictionary (OED) is the principal historical dictionary of the English language, published by Oxford University Press (OUP). It traces the historical development of the English language,
                            providing a comprehensive resource to scholars and academic researchers, as well as describing usage in its many variations throughout the world. The second edition, comprising 21,728 pages in 20 volumes,
                            was published in 1989.
                        </p>
                        <hr class="hrCont">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3 class="text-center"> Features</h3>
                        <hr class="hrCont">
                    </div>
                </div>
                <div class="row justify-content-center py-4">
                    <div class="col-8">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="../img/home2.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="../img/home3.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/home4.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center py-3 features">
                    <div class="col-sm-5">
                        <div class="card my-2">
                            <div class="card-body text-center" >
                                <h3 class="card-Header text-center"><strong>Definition</strong> </h3>
                                <p class="card-text text-center">
                                    Definition page provided you this features in the list below.
                                </p>
                                <hr class="hrCont">
                                    <p >Pronunciation</p>
                                    <p >Definition</p>
                                    <p >Part Of Speech</p>
                                    <p >Example</p>
                                    <p >Etc.</p>
                                <a href="/" class="btn btn-primary mt-2">Go To Definition</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="card my-2">
                            <div class="card-body text-center">
                                <h3 class="card-title text-center"><strong>Thesaurus</strong></h3>
                                <p class="card-text text-center">
                                    Thesaurus page provided you this features in the list below.
                                </p>
                                <hr class="hrCont">
                                    <p >Pronunciation</p>
                                    <p>Synonyms</p>
                                    <p >Antonyms</p>
                                    <p >Example</p>
                                    <p >Etc.</p>
                                <a href="/pages/thesaurus" class=" btn btn-primary mt-2">Go To Thesaurus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <footer class=" container-fluid page-footer font-small blue mt-4 bg-dark">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> Words LBW</a>
        </div>
        <!-- Copyright -->
    </footer>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script> -->


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="../Js/darkmode.js"></script>

    <script>
        $(document).ready(function() {
            var url = window.location;
            $('.btn[href="' + url + '"]').parent().addClass('active');
            $('.btn').filter(function() {
                return this.href == url;
            }).parent().addClass('active');
        });

        var content = document.getElementById('textD').textContent;
        var pre = document.getElementById('preRes');
        var re = document.getElementById('result');
        if (content == 'None') {
            pre.style.display = '';
            re.style.display = 'none';
        } else if(content == 'About'){
            pre.style.display = 'none';
        }else {
            re.style.display = '';
            pre.style.display = 'none';
        }

        var myCarousel = document.querySelector('#carouselExampleDark')
        if (myCarousel) {
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 3000,
                wrap: false
            })
        }
    </script>

</body>

</html>