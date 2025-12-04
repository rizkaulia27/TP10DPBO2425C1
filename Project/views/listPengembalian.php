<?php require_once 'views/templates/header.php'; ?>

<h2 class="mt-4">Daftar Pengembalian</h2>
<a href="index.php?entity=pengembalian&action=add" class="btn btn-primary" style="margin-bottom: 15px; display: inline-block;">Add Pengembalian</a>

<table class="w-full border mt-3">
    <tr>
        <th class="border px-4 py-2">Nama Anggota</th>
        <th class="border px-4 py-2">Judul Buku</th>
        <th class="border px-4 py-2">Tgl Pengembalian</th>
        <th class="border px-4 py-2">Actions</th>
    </tr>

    <?php foreach ($pengembalianList as $k): ?>
        <tr>
            <td class="border px-4 py-2"><?= htmlspecialchars($k['nama_anggota']); ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($k['judul']); ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($k['tanggal_pengembalian']); ?></td>

            <td class="border px-4 py-2">
                <a href="index.php?entity=pengembalian&action=edit&id_pengembalian=<?= $k['id_pengembalian']; ?>" class="btn btn-primary">Edit</a> 
                <a href="index.php?entity=pengembalian&action=delete&id_pengembalian=<?= $k['id_pengembalian']; ?>"
                   onclick="return confirm('Hapus data pengembalian?');" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'views/templates/footer.php'; ?>
