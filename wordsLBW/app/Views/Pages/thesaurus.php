<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row  d-flex justify-content-center text-center">
        <div id="defBackground" class="jumbotron w-100">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead">Synonyms and Antonyms of a Word</p>
            <hr class="my-4">
            <p>Dictionary for Synonyms and Antonyms</p>
            <p class="lead">
                <form method="POST" action="/Pages/createRes" class="d-flex justify-content-center">
                    <?= csrf_field(); ?>
                    <input type="text" id="inputWords" name="input" class="form-control rounded-pill w-50" aria-label="Text input with dropdown button" placeholder="Type your word">
                    <button class="btn btn-success ml-3 rounded-circle" type="submit"><i class=" fa fa-search"></i></button>
                </form>
            </p>
        </div>
    </div>
</div>

<hr>

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-8">
            <div id="contentResult" >
                <h2 class="card-header text-center " style="color : darkblue ; font-style : italic "><strong><?php echo $word ?></strong></h2>
                <div class="card-body">
                    <!-- <h5 class="card-title">Pronounciation</h5>
                    <p>bʊk</p>
                    <h5 class="card-title">Noun</h5>
                    <p class="card-text">physical objects consisting of a number of pages bound together</p>
                    <h5 class="card-title">Examples</h5> -->

                    <?php
                    echo '<h4 class="card-header mb-3 bg-warning"> Pronunciation</h4>';
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

                <div class="card-header">
                    <div class="card-body">
                        <?php
                        echo '<h4 class="card-header mb-3 bg-warning"> Synonyms</h4>';
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

                <div class="card-header">
                    <div class="card-body">
                        <?php
                        echo '<h4 class="card-header mb-3 bg-warning"> Antonyms</h4>';
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

        <div class="col-4">
            <div id="wod" class="card w-100 text-center">
                <h5 class="card-header">Word of The Day</h5>
                <div class="card-body">
                    <h2 class="card-text"><?php echo $wordRan; ?></h2>
                    <hr>
                    <h4 class="card-title">Definition</h4>
                    <h5 class="card-text"><?php echo $resultRan[0]['definition'] ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>