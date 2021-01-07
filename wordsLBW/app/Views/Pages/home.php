<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row  d-flex justify-content-center text-center">
        <div id="defBackground" class="jumbotron w-100">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead">Oxford English Dictionary, Thesaurus, and English Translator</p>
            <hr class="my-4">
            <p class="mb-4">Dictionary for Definition of a Word</p>
            <form method="GET" action="/Pages/createWordDef" class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <input class="form-control rounded-pill w-50" type="text" id="inputWords" name="input" placeholder="Type your word" aria-label="Search">
                <button class="btn btn-success rounded-circle ml-4" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</div>

<hr>

<div id="result" class="container-fluid px-4">
    <div class="row">
        <div class="col-8">
            <div id="contentResult">
                <h2 id="textD" class="card-header text-center" style="color : darkblue ; font-style : italic "><strong><?php echo $word ?></strong></h2>
                <div class="card-body">
                    <?php
                    echo '<h4 class="card-header mb-3 bg-warning">Pronunctiation</h4>';
                    echo '<table class="table table-bordered  p-2">';
                    if (is_array($pronunciation)) {
                        foreach ($pronunciation['pronunciation'] as $key => $value) {
                            echo '<tr>';
                            echo '<th scope="col" >' . $key . '</th>';
                            echo '<td >' . $value . '</td>';
                            echo '</tr>';
                        }
                    }

                    echo '<hr>';
                    echo '</table>';
                    if (is_array($result) && isset($result['results'])) {
                        foreach ($result['results'] as $key => $value) {
                            echo '<h4 class="card-header mb-3 bg-warning">' . $key . '</h4>';
                            if (is_array($value)) {
                                foreach ($value as $key2 => $value2) {
                                    echo '<hr id= "hrCont">';
                                    echo '<h4 class="card-title" style="color : darkblue ; font-style : italic "><strong>' . $key2 . '</strong></h4>';

                                    if (!is_array($value2)) {
                                        echo '<li class= "px-2 py-4"><strong>' . $value2 . '</strong></li>';
                                    } else {
                                        echo '<div class="  table-responsive flex-wrap mb-3">';
                                        echo '<table class = " table table-bordered">';
                                        echo '<tbody>';
                                        echo '<tr>';
                                        foreach ($value2 as $key3 => $value3) {
                                            echo '<td scope="col"><strong>' . $value3 . '</strong></td>';
                                        }
                                        echo '</tr>';
                                        echo '</tbody>';
                                        echo '</table>';
                                        echo '</div>';
                                    }
                                }
                            } else {
                                echo '<p>' . $value . '</p>';
                            }
                            echo '<hr>';
                        }
                    }

                    ?>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="row">
                <div class="col">
                    <div id="wod" class="card w-100 text-center">
                        <h5 class="card-header">Word of The Day</h5>
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $wordRan ?></h2>
                            <hr>
                            <h4 class="card-title">Definition</h4>
                            <h5 class="card-text"><?php echo $resultRan[0]['definition'] ?></h5>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row my-3">
                <div class="col">
                    <?php
                    echo '<h2>Example</h2>';
                    echo '<hr id= "hrCont">';
                    if (is_array($example)) {
                        echo '<h2 style="color : darkblue ; font-style : italic "><strong>' . $example['word'] . '</strong></h2>';
                        echo '<ul class="list-group list-group-flush">';
                        foreach ($example['examples'] as $key => $value) {
                            echo '<li class="list-group-item">' . $value . '</li>';
                        }
                        echo '</ul>';
                    } else {
                        echo '<h2>' . $example . '</h2>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endsection(); ?>