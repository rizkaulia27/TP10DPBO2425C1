<?php
require_once 'views/templates/header.php';
?>

<h2 class="text-xl mb-4">
    <?= isset($penulis) ? 'Edit Penulis' : 'Tambah Penulis'; ?>
</h2>

<form action="index.php?entity=penulis&action=<?= isset($penulis) ? 'update&id_penulis=' . $penulis['id_penulis'] : 'save'; ?>" method="POST" class="space-y-4">
    <!-- NAMA PENULIS -->
    <div>
        <label class="block">Nama Penulis:</label>
        <input type="text" name="nama_penulis" value="<?= isset($penulis) ? $penulis['nama_penulis'] : ''; ?>" class="border p-2 w-full" required>
    </div>

    <!-- BIO -->
    <div>
        <label class="block">Biografi:</label>
        <input type="bio" name="bio" value="<?= isset($penulis) ? $penulis['bio'] : ''; ?>" class="border p-2 w-full" required>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
        Simpan
    </button>
</form>