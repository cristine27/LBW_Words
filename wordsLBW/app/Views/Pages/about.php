<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row  d-flex justify-content-center text-center">
        <div id="defBackground" class="jumbotron w-100 ">
            <h1 id="textD" class="display-4">About</h1>
            <p class="lead">Words LBW</p>
            <hr class="my-4">
            <p>Dictionary for Synonyms and Antonyms</p>
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt blablabla
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="teams" class="card w-90 text-center">
            <h3 class="card-header">Teams</h3>
            <div class="card-body">
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt blablabla
                </p>
                <div class="row">
                    <div class="col-3">
                        <h4 class="card-header text-center">Nama</h4>
                        <div class="card">
                            <img src="../img/logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h4 class="card-header text-center">Nama</h4>
                        <div class="card">
                            <img src="../img/logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h4 class="card-header text-center">Nama</h4>
                        <div class="card">
                            <img src="../img/logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <h4 class="card-header text-center">Nama</h4>
                        <div class="card">
                            <img src="../img/logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>