<?php require_once 'views/templates/header.php'; ?>

<h2 class="mt-4">Daftar Penulis</h2>
<a href="index.php?entity=penulis&action=add" class="btn btn-primary" style="margin-bottom: 15px; display: inline-block;">Add Penulis</a>

<table class="w-full border mt-3">
    <tr>
        <th class="border px-4 py-2">Nama Penulis</th>
        <th class="border px-4 py-2">Biografi</th>
        <th class="border px-4 py-2">Actions</th>
    </tr>

    <?php foreach ($penulisList as $p): ?>
        <tr>
            <td class="border px-4 py-2"><?= htmlspecialchars($p['nama_penulis']); ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($p['bio']); ?></td>

            <td class="border px-4 py-2">
                <a href="index.php?entity=penulis&action=edit&id_penulis=<?= $p['id_penulis']; ?>" class="btn btn-primary">Edit</a> 
                <a href="index.php?entity=penulis&action=delete&id_penulis=<?= $p['id_penulis']; ?>"
                   onclick="return confirm('Hapus penulis ini?');" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'views/templates/footer.php'; ?>
