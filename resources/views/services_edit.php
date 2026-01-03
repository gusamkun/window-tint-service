<?php ob_start(); ?>

<h1>Edit Layanan</h1>

<form method="POST" action="/services/update/<?= $service->id ?>">
    <input type="hidden" name="_token" value="<?= csrf_token() ?>">

    <div class="mb-3">
        <label>Nama Layanan</label>
        <input type="text" name="name" class="form-control"
               value="<?= htmlspecialchars($service->name) ?>" required>
    </div>

    <button class="btn btn-success">Update</button>
    <a href="/services" class="btn btn-secondary">Kembali</a>
</form>

<?php
$content = ob_get_clean();
include __DIR__.'/layouts/app.php';
