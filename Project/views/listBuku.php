<?php require_once 'views/templates/header.php'; ?>

<h2 class="mt-4">Daftar Buku</h2>
<a href="index.php?entity=buku&action=add" class="btn btn-primary" style="margin-bottom: 15px; display: inline-block;">Add Buku</a>

<table class="w-full border mt-3">
    <tr>
        <th class="border px-4 py-2">Judul</th>
        <th class="border px-4 py-2">Penulis</th>
        <th class="border px-4 py-2">Tahun Terbit</th>
        <th class="border px-4 py-2">Stok</th>
        <th class="border px-4 py-2">Actions</th>
    </tr>

    <?php foreach ($bukuList as $b): ?>
        <tr>
            <td class="border px-4 py-2"><?= htmlspecialchars($b['judul']); ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($b['nama_penulis']); ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($b['tahun_terbit']); ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($b['stok']); ?></td>

            <td class="border px-4 py-2">
                <a href="index.php?entity=buku&action=edit&id_buku=<?= $b['id_buku']; ?>" class="btn btn-primary">Edit</a> 
                <a href="index.php?entity=buku&action=delete&id_buku=<?= $b['id_buku']; ?>"
                   onclick="return confirm('Hapus buku ini?');" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'views/templates/footer.php'; ?>
