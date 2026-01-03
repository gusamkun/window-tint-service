<?php ob_start(); ?>

<h1>Daftar Layanan</h1>

<a href="/services/create" class="btn btn-primary mb-3">Tambah Layanan</a>

<table class="table table-bordered">
<tr>
    <th>No</th>
    <th>Nama Layanan</th>
    <th>Aksi</th>
</tr>

<?php $no = 1; foreach ($services as $service): ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= htmlspecialchars($service->name) ?></td>
    <td>
        <a href="/services/edit/<?= $service->id ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="/services/delete/<?= $service->id ?>"
           onclick="return confirm('Hapus data?')"
           class="btn btn-danger btn-sm">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<?php
$content = ob_get_clean();
include __DIR__.'/layouts/app.php';
