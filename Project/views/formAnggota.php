<?php
require_once 'views/templates/header.php';
?>

<h2 class="text-xl mb-4">
    <?= isset($anggota) ? 'Edit Anggota' : 'Tambah Anggota'; ?>
</h2>

<form method="post"
      action="index.php?entity=anggota&action=<?= isset($anggota) ? 'update&id_anggota=' . $anggota['id_anggota'] : 'save' ?>">
    
    <!-- NAMA ANGGOTA -->
    <div>
        <label class="block">Nama Anggota:</label>
        <input type="text" name="nama_anggota"
               value="<?= isset($anggota) ? $anggota['nama_anggota'] : ''; ?>"
               class="border p-2 w-full" required>
    </div>

    <!-- EMAIL -->
    <div>
        <label class="block">Email:</label>
        <input type="email" name="email"
               value="<?= isset($anggota) ? $anggota['email'] : ''; ?>"
               class="border p-2 w-full" required>
    </div>

    <!-- ALAMAT -->
    <div>
        <label class="block">Alamat:</label>
        <textarea name="alamat" class="border p-2 w-full" required>
            <?= isset($anggota) ? $anggota['alamat'] : ''; ?>
        </textarea>
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
        Simpan
    </button>
</form>