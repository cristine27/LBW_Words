<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row  d-flex justify-content-center text-center">
        <div class="jumbotron w-100 my-4">
            <h1 class="display-4">Thesaurus</h1>
            <p class="lead">Synonyms and Antonyms of a Word</p>
            <hr class="my-4">
            <p>Dictionary for Synonyms and Antonyms</p>
            <p class="lead">
                <form method="POST" action="/Home/cek" class="d-flex">
                    <?= csrf_field(); ?>
                    <div class="input-group mb-3 ">
                        <div class="input-group-prepend mr-3">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <button class="btn btn-outline-success ml-3" type="submit">Submit</button>
                    </div>
                </form>
            </p>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <div class="row">
        <div class="col-7">
            <div class="card">
                <h5 class="card-header">Result</h5>
                <div class="card-body">
                    <h5 class="card-title">Pronounciation</h5>
                    <p>bʊk</p>
                    <h5 class="card-title">Noun</h5>
                    <p class="card-text">physical objects consisting of a number of pages bound together</p>
                    <h5 class="card-title">Examples</h5>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card w-100">
                <h5 class="card-header">Word of The Day</h5>
                <div class="card-body">
                    <h5 class="card-title">Word</h5>
                    <p class="card-text">deerberry</p>
                    <h5 class="card-title">Definition</h5>
                    <p class="card-text">small branching blueberry common in marshy areas of the eastern United States having greenish or
                        yellowish unpalatable berries reputedly eaten by deer</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>