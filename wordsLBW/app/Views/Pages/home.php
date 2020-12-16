<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row  d-flex justify-content-center text-center">
        <div class="jumbotron w-100 my-4">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead">Oxford English Dictionary, Thesaurus, and English Translator</p>
            <hr class="my-4">
            <p>Dictionary for Definition of a Word</p>
            <p class="lead">
                <form method="POST" action="/Pages/createWordDef" class="d-flex">
                    <?= csrf_field(); ?>
                    <input class="form-control me-2" type="text" id="inputWords" name="input" placeholder="Type your word or phrase" aria-label="Search">
                    <button class="btn btn-outline-success ml-3" type="submit">Submit</button>
                </form>
            </p>
        </div>
    </div>
</div>
<hr>

<div class="container flex-wrap">
    <div class="row">
        <div class="col-7">
            <div class="card">
                <h4 class="card-header"><?php echo $word ?></h4>
                <div class="card-body">
                    <?php
                    echo '<h5 class="card-title">Pronunctiation</h5>';
                    echo '<p class="card-text">' . $pronunciation['all'] . '</p>';
                    foreach ($result as $key => $value) {
                        echo '<h4 class="card-header mb-3">' . $key . '</h4>';
                        if (is_array($value)) {
                            foreach ($value as $key2 => $value2) {
                                echo '<h5 class="card-title">' . $key2 . '</h5>';

                                if (!is_array($value2)) {
                                    echo '<p>' . $value2 . '</p>';
                                } else {
                                    echo '<div class="table-responsive flex-wrap mb-3">';
                                    echo '<table class = "table table-bordered">';
                                    echo '<tbody>';
                                    echo '<tr>';
                                    foreach ($value2 as $key3 => $value3) {
                                        echo '<td scope="col">' . $value3 . '</td>';
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
                    ?>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card w-100">
                <h5 class="card-header">Word of The Day</h5>
                <div class="card-body">
                    <h5 class="card-title">Word</h5>
                    <p class="card-text"><?php echo $wordRan ?></p>
                    <h5 class="card-title">Definition</h5>
                    <p class="card-text"><?php echo $resultRan[0]['definition'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>