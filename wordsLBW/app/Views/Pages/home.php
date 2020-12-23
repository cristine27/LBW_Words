<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row  d-flex justify-content-center text-center">
        <div id="defBackground" class="jumbotron w-100">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead">Oxford English Dictionary, Thesaurus, and English Translator</p>
            <hr class="my-4">
            <p class="mb-4">Dictionary for Definition of a Word</p>
            <form method="POST" action="/Pages/createWordDef" class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <input class="form-control rounded-pill w-50" type="text" id="inputWords" name="input" placeholder="Type your word" aria-label="Search">
                <button class="btn btn-success rounded-circle ml-4" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</div>

<hr>

<div class="container-fluid px-4">
    <div class="row">
        <div class="col-8 d-none text-center">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="../img/home2.jpg" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/home3.jpg" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/home4.jpg" class="d-block w-100 rounded" alt="...">
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
        <div class="col-8">
            <div id="contentResult" >
                <h2 class="card-header text-center" style="color : darkblue ; font-style : italic "><strong><?php echo $word ?></strong></h2>
                <div class="card-body">
                    <?php
                    echo '<h4 class="card-header mb-3 bg-warning">Pronunctiation</h4>';
                    echo '<table class="table table-bordered  p-2">';
                    foreach ($pronunciation as $key => $value) {
                        echo '<tr>';
                        echo '<th scope="col" >' . $key . '</th>';
                        echo '<td >' . $value . '</td>';
                        echo '</tr>';
                    }
                    echo '<hr>';
                    echo '</table>';
                    foreach ($result as $key => $value) {
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
                    ?>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div id="wod" class="card w-100 text-center">
                <h5 class="card-header">Word of The Day</h5>
                <div  class="card-body">
                    <h2 class="card-title"><?php echo $wordRan ?></h2>
                    <hr>
                    <h4 class="card-title">Definition</h4>
                    <h5 class="card-text"><?php echo $resultRan[0]['definition'] ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>