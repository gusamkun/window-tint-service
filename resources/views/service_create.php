<?php ob_start(); ?>

<h1>Tambah Layanan</h1>

<form method="POST" action="/services/store">
    <input type="hidden" name="_token" value="<?= csrf_token() ?>">

    <div class="mb-3">
        <label>Nama Layanan</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <button class="btn btn-success">Simpan</button>
    <a href="/services" class="btn btn-secondary">Kembali</a>
</form>

<?php
$content = ob_get_clean();
include __DIR__.'/layouts/app.php';
