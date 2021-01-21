<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row  d-flex justify-content-center text-center">
        <div id="defBackground" class="jumbotron w-100 ">
            <h1 id="textD" class="display-4">About</h1>
            <p class="lead">Words LBW</p>
            <hr class="my-4">
            <p>About This Project</p>
            <p class="lead"></p>
        </div>
    </div>
</div>

<hr>

<div class="container">
    <div class="row">
        <div id="background" class="card w-90 mb-3 text-center">
            <h4 class="card-header">BACKGROUND</h4>
            <div class="card-body">
                <p class="card-text">
                    English is the world's most widely used language in newspaper publishing, book publishing, international telecommunications,
                    scientific publishing, international trade, mass entertainment, and diplomacy. Although in most countries English is not an
                    official language, it is currently the language most often taught as a foreign language. People used to learn this language
                    by using a dictionary, but that way is not practical because people have to take an extra space to carry a dictionary arroud.
                    Beside the extra space, it will take an extra time to search a word throughout a dictionary. In order to solve that problem,
                    a website based on a dictionary was developed. With this website people can learn and search english words anywhere and anytime.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="teams" class="card w-90 text-center">
            <h3 class="card-header">Meet our team</h3>
            <div class="card-body">
                <p class="card-text">
                    These are the people that makes the magic happen.
                </p>
                <div class="row">
                    <div class="col-3">
                        <h4 class="card-header text-center">Cristine</h4>
                        <div class="card">
                            <img src="../img/foto cristine.jpeg" class="card-img-top" alt="cristine">
                            <div class="card-body">
                                <p class="card-text" style="color: black;">Fullstack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h4 class="card-header text-center">Dionisius</h4>
                        <div class="card">
                            <img src="../img/foto dionisius.jpg" class="card-img-top" alt="dionisius">
                            <div class="card-body">
                                <p class="card-text" style="color: black;">Fullstack Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h4 class="card-header text-center">Firman</h4>
                        <div class="card">
                            <img src="../img/foto firman.jpg" class="card-img-top" alt="firman">
                            <div class="card-body">
                                <p class="card-text" style="color: black;">Front-End Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h4 class="card-header text-center">Yosef</h4>
                        <div class="card">
                            <img src="../img/foto yosef.jpg" class="card-img-top" alt="yosef">
                            <div class="card-body">
                                <p class="card-text" style="color: black;">Front-End Developer</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>