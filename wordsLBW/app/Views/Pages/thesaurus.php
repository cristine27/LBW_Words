<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row  d-flex justify-content-center text-center">
        <div id="defBackground" class="jumbotron w-100">
            <h1 class="display-4"><?php

use CodeIgniter\Filters\CSRF;

echo $title; ?></h1>
            <p class="lead">Synonyms and Antonyms of a Word</p>
            <hr class="my-4">
            <p>Dictionary for Synonyms and Antonyms</p>
            <p class="lead">
            <form method="GET" action="/Pages/createRes" class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <input type="text" id="inputWords" name="input" class="form-control rounded-pill w-50" aria-label="Text input with dropdown button" placeholder="<?php echo $placeholder ?>">
                <button class="btn btn-success ml-3 rounded-circle" type="submit"><i class=" fa fa-search"></i></button>
            </form>
            </p>
        </div>
    </div>
</div>

<hr>

<div id="result" class="container-fluid px-4">
    <div class="row">
        <div class="col-8">
            <div id="contentResult">
                <h2 id="textD" class="card-header text-center " style="color: blue; font-style: italic"><strong><?php echo ($word) ?></strong></h2>
                <div class="card-body">

                    <?php
                    echo '<h4 class="card-header mb-3 bg-warning">Pronunciation</h4>';
                    echo '<table class="table table-bordered">';
                    if (is_array($pronunciation) && count($pronunciation) != 0) {
                        foreach ($pronunciation as $key => $value) {
                            echo '<tr>';
                            echo '<th scope="col" >' . $key . '</th>';
                            if (is_array($value)) {
                                foreach ($value as $key2 => $value2) {
                                    echo '<td >' . $value2 . '</td>';
                                }
                            } else {
                                echo '<td >' . $value . '</td>';
                            }
                            echo '</tr>';
                        }
                    } else {
                        echo '<h5>none</h5>';
                    }
                    echo '</table>';
                    ?>
                </div>

                <div class="card-header">
                    <div class="card-body">
                        <?php
                        echo '<h4 class="card-header mb-3 bg-warning">Synonyms</h4>';
                        if (is_array($sinonim)) {
                            echo '<table class="table table-bordered">';
                            foreach ($sinonim as $key => $value) {
                                $count = $key + 1;
                                echo '<tr>';
                                echo '<th scope="col">' . $count . '</th>';
                                echo '<td><a href="/Pages/createWordDef?input=' . $value . '">' . $value . '</a></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td><p>Search by : </p></td>';
                                echo '<td>';
                                echo '<a class="btn btn-outline-primary mx-1" target=”_blank” href="https://www.google.com/search?q=' . $value . '" role="button">Google</a>';
                                echo '<a class="btn btn-outline-primary mx-auto" target=”_blank” href="https://en.wikipedia.org/wiki/' . $value . '" role="button">Wikipedia</a>';
                                echo '</tr>';
                            }
                            echo '</table>';
                        } else {
                            echo '<h3>' . $sinonim . '</h3>';
                        }


                        ?>
                    </div>
                </div>

                <div class="card-header">
                    <div class="card-body">
                        <?php
                        echo '<h4 class="card-header mb-3 bg-warning"> Antonyms</h4>';
                        if (is_array($antonim)) {
                            echo '<table class="table table-bordered">';
                            foreach ($antonim as $key => $value) {
                                $count = $key + 1;
                                echo '<tr>';
                                echo '<th scope="col">' . $count . '</th>';
                                echo '<td><a href="/Pages/createWordDef?input='.$value.'">' . $value . '</a></td>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td><p>Search by : </p></td>';
                                echo '<td>';
                                echo '<a class="btn btn-outline-primary mx-1" target=”_blank” href="https://www.google.com/search?q=' . $value . '" role="button">Google</a>';
                                echo '<a class="btn btn-outline-primary mx-auto" target=”_blank” href="https://en.wikipedia.org/wiki/' . $value . '" role="button">Wikipedia</a>';
                                echo '</tr>';
                            }
                            echo '</table>';
                        } else {
                            echo '<h3>' . $antonim . '</h3>';
                        }

                        ?>
                    </div>
                </div>
            </div>


        </div>

        <div class="col-4">
            <div class="row">
                <div class="col">
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

            <div class="row my-3">
                <div class="col">
                    <h2>Example</h2>
                    <div id="accordion" class="mb-2">
                        <div class="card">
                            <div class="card-header" id="sinomEx">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#sinomCollaps" aria-expanded="false" aria-controls="sinomCollaps">
                                        Synonyms Words Example </button>
                                </h5>
                            </div>
                            <hr id="hrCont">
                            <div id="sinomCollaps" class="collapse" aria-labelledby="sinomEx" data-parent="#accordion">
                                <div class="card-body">
                                    <?php

                                    if (is_array($sinonim)) {
                                        echo '<div id="accordionContent">';
                                        foreach ($sinonim as $key => $value) {
                                            if (is_array($exampleS[$key])) {
                                                echo '<div class="card mb-2">';
                                                echo '<div class="card-header" id="heading' . $key . '">';
                                                echo '<h4 style="color: blue; font-style: italic">' . $exampleS[$key]['word'] . '
                                                <button class="btn btn-link sinButton" data-toggle="collapse" data-target="#collapse' . $key . '" aria-expanded="false" aria-controls="collapse' . $key . '"> show
                                                </button></h4>';
                                                echo '</div>';
                                                echo '<div id="collapse' . $key . '" class="collapse colDiv show" aria-labelledby="heading' . $key . '" data-parent="#accordionContent">';
                                                echo '<div class="card-body">';
                                                echo '<ul class="list-group list-group-flush">';
                                                if (count($exampleS[$key]['examples']) == 0) {
                                                    echo '<li class="list-group-item"> Sorry... Not available yet</li>';
                                                } else {
                                                    foreach ($exampleS[$key]['examples'] as $key => $value) {
                                                        echo '<li class="list-group-item">' . $value . '</li>';
                                                    }
                                                }
                                                echo '</ul>';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            } else {
                                                echo '<h4>' . $exampleS[$key] . '</h4>';
                                            }
                                        }
                                        echo '</div>';
                                    } else {
                                        echo '<h2>' . $sinonim . '</h2>';
                                    }


                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="accordion2">
                        <div class="card">
                            <div class="card-header" id="antoEx">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#antoCollaps" aria-expanded="false" aria-controls="antoCollaps">
                                        Antonyms Words Example </button>
                                </h5>
                            </div>
                            <hr id="hrCont">
                            <div id="antoCollaps" class="collapse" aria-labelledby="antoEx" data-parent="#accordion2">
                                <div class="card-body">
                                    <?php
                                    if (is_array($antonim) && count($antonim) != 0) {
                                        echo '<div id="accordionAntonyms">';
                                        foreach ($antonim as $key => $value) {

                                            if (is_array($exampleA[$key])) {
                                                echo '<div class="card mb-2">';
                                                echo '<div class="card-header" id="heading' . $key . '">';
                                                echo '<h4 style="color: blue; font-style: italic">' . $exampleA[$key]['word'] . '
                                                <button class="btn btn-link anButton" data-toggle="collapse" data-target="#collapse2' . $key . '" aria-expanded="false" aria-controls="collapse2' . $key . '"> show
                                                </button></h4>'; 
                                                echo '</div>';
                                                echo '<div id="collapse2' . $key . '" class="collapse show" aria-labelledby="heading' . $key . '" data-parent="#accordionAntonyms">';
                                                echo '<div class="card-body">';
                                                echo '<ul class="list-group list-group-flush">';
                                                if (count($exampleA[$key]['examples']) == 0) {
                                                    echo '<li class="list-group-item"> Sorry... Not available yet</li>';
                                                } else {
                                                    foreach ($exampleA[$key]['examples'] as $key => $value) {
                                                        echo '<li class="list-group-item">' . $value . '</li>';
                                                    }
                                                }
                                                echo '</ul>';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                            } else {
                                                echo '<h4>' . $exampleA[$key] . '</h4>';
                                            }
                                        }
                                        echo '</div>';
                                    } else {
                                        echo '<h2> Search the word using the link below!!! </h2>';
                                    }


                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?= $this->endsection(); ?>