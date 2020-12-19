<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row  d-flex justify-content-center text-center">
        <div class="jumbotron w-100 my-4">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead">Synonyms and Antonyms of a Word</p>
            <hr class="my-4">
            <p>Dictionary for Synonyms and Antonyms</p>
            <p class="lead">
                <form method="POST" action="/Pages/createRes" class="d-flex">
                    <?= csrf_field(); ?>
                    <input type="text" id="inputWords" name="input" class="form-control" aria-label="Text input with dropdown button" placeholder="Type your word">
                    <button class="btn btn-outline-success ml-3" type="submit">Submit</button>
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
                <h5 class="card-header"><?php echo $word ?></h5>
                <div class="card-body">
                    <!-- <h5 class="card-title">Pronounciation</h5>
                    <p>bʊk</p>
                    <h5 class="card-title">Noun</h5>
                    <p class="card-text">physical objects consisting of a number of pages bound together</p>
                    <h5 class="card-title">Examples</h5> -->

                    <?php
                    echo '<h4 class="card-header mb-3"> Pronunciation</h4>';
                    echo '<table class="table table-bordered">';
                    foreach ($pronunciation as $key => $value) {
                        echo '<tr>';
                        echo '<th scope="col">' . $key . '</th>';
                        echo '<td>' . $value . '</td>';
                        echo '</tr>';
                    }
                    echo '</table>';

                    ?>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <?php
                        echo '<h4 class="card-header mb-3"> Synonyms</h4>';
                        echo '<table class="table table-bordered">';
                        foreach ($sinonim as $key => $value) {
                            $count = $key + 1;
                            echo '<tr>';
                            echo '<th scope="col">' . $count . '</th>';
                            echo '<td>' . $value . '</td>';
                            echo '</tr>';
                        }
                        echo '</table>';

                        ?>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <?php
                        echo '<h4 class="card-header mb-3"> Antonyms</h4>';
                        echo '<table class="table table-bordered">';
                        foreach ($antonim as $key => $value) {
                            $count = $key + 1;
                            echo '<tr>';
                            echo '<th scope="col">' . $count . '</th>';
                            echo '<td>' . $value . '</td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card w-100">
                <h5 class="card-header">Word of The Day</h5>
                <div class="card-body">
                    <h5 class="card-title">Word</h5>
                    <p class="card-text"><?php echo $wordRan; ?></p>
                    <h5 class="card-title">Definition</h5>
                    <p class="card-text"><?php echo $resultRan[0]['definition'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>