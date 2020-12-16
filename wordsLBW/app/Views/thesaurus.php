<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1>Thesaurus</h1>

<h1>TRANSLATION</h1>
<form method="POST" action="/Thesaurus/cek">
    <?= csrf_field(); ?>
    <div class="form-group">
        <label for="inputWords">input words</label>
        <input type="text" class="form-control" id="inputWords" name="input" autofocus>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<div class="container">
    <div class="row">
        <div class="col">
            <h2>Hasil pencarian dari kata : </h2>
            <?php
            if (Flag2 == 1) {
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
                if (Flag2 == 1) {
                    foreach ($data['sinonim']['synonyms'] as $key => $value) {
                        echo $value . ' ';
                    }
                }
                ?>
            </div>
            <div class="row">
                <h4><b>Antonim : </b></h4>

                <?php
                if (Flag2 == 1) {
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