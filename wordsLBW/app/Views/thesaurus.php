<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php
$flag = 0;
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Hasil pencarian dari kata : </h2>
            <?php
            if ($flag == 1) {
                print_r($data);
                echo $data['sinonim']['word'];
                echo ' ';
                // echo $data['antonim']['word'];
            }
            ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <h4><b>Sinonim : </b></h4>

                <?php
                if ($flag == 1) {
                    foreach ($data['sinonim']['synonyms'] as $key => $value) {
                        echo $value . ' ';
                    }
                }
                ?>
            </div>
            <div class="row">
                <h4><b>Antonim : </b></h4>

                <?php
                if ($flag == 1) {
                    foreach ($data['antonim']['antonyms'] as $key => $value) {
                        echo $value . ' ';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection(); ?>