<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1>TRANSLATION</h1>
<form method="POST" action="/Thesaurus/cek">
    <?= csrf_field(); ?>
    <div class="form-group">
        <label for="inputWords">input words</label>
        <input type="text" class="form-control" id="inputWords" name="input" autofocus>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?= $this->endsection(); ?>