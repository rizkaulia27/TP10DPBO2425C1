<?php
require_once 'views/templates/header.php';
?>

<h2 class="mt-4">Daftar Anggota</h2>

<a href="index.php?entity=anggota&action=add" class="btn btn-primary" style="margin-bottom: 15px; display: inline-block;">Add Anggota</a>

<table class="w-full border mt-3">
    <tr>
        <th class="border px-4 py-2">Nama Anggota</th>
        <th class="border px-4 py-2">Email</th>
        <th class="border px-4 py-2">Alamat</th>
        <th class="border px-4 py-2">Actions</th>
    </tr>

    <?php foreach ($anggotaList as $a): ?>
        <tr>
            <td class="border px-4 py-2">
                <?= htmlspecialchars($a['nama_anggota']); ?>
            </td>

            <td class="border px-4 py-2">
                <?= htmlspecialchars($a['email']); ?>
            </td>

            <td class="border px-4 py-2">
                <?= htmlspecialchars($a['alamat']); ?>
            </td>

            <td class="border px-4 py-2">    
                <a href="index.php?entity=anggota&action=edit&id_anggota=<?= $a['id_anggota']; ?>" class="btn btn-primary">Edit</a> 
                <a href="index.php?entity=anggota&action=delete&id_anggota=<?= $a['id_anggota']; ?>"
                onclick="return confirm('Hapus anggota ini?');" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/templates/footer.php';
?>
