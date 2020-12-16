<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container mb-4">
    <div class="row  d-flex justify-content-center text-center">
        <div class="jumbotron w-100 my-4">
            <h1 class="display-4">About</h1>
            <p class="lead">Words LBW</p>
            <hr class="my-4">
            <p>Dictionary for Synonyms and Antonyms</p>
            <p class="lead"></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="card w-90 mb-3">
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
        <div class="card w-90">
            <h3 class="card-header">Team</h3>
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
</div>

<?= $this->endsection(); ?>