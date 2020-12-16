<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col center-block text-center">
            <div class="jumbotron">
                <h1>ABOUT</h1>
                <h4>Words LBW</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <div class="row">
                    <h3>Background</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum sunt voluptatum mollitia accusamus quam perspiciatis sint quod, veniam rem incidunt in! Architecto ducimus qui corporis ea voluptas soluta at reprehenderit.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem corrupti dolorum dolores adipisci praesentium minus modi nostrum, in laudantium officiis quidem amet veritatis soluta totam nobis cumque! Earum, molestiae accusamus.</p>
                </div>

                <div class="row">
                    <h3>Teams</h3>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <a href="#anggota1" data-toggle="collapse">
                                <img alt="AltText" src="https://placehold.it/300" class="img-fluid">
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <a href="#anggota2" data-toggle="collapse">
                                <img alt="AltText" src="https://placehold.it/300" class="img-fluid">
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <a href="#anggota3" data-toggle="collapse">
                                <img alt="AltText" src="https://placehold.it/300" class="img-fluid">
                            </a>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <a href="#anggota4" data-toggle="collapse">
                                <img alt="AltText" src="https://placehold.it/300" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col mt-3">
                        <div id="anggota1" class="collapse">
                            <div class="card bg-info">
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        INFO
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="anggota2" class="collapse">
                            <div class="card bg-info">
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        INFO
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="anggota3" class="collapse">
                            <div class="card bg-info">
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        INFO
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="anggota4" class="collapse">
                            <div class="card bg-info">
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        INFO
                                    </p>
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