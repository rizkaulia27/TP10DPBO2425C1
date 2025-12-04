<?php
require_once 'views/templates/header.php';
?>

<h2 class="text-xl mb-4">
    <?= isset($pengembalian) ? 'Edit Pengembalian' : 'Tambah Pengembalian'; ?>
</h2>

<form action="index.php?entity=pengembalian&action=<?= isset($pengembalian) ? 'update&id_pengembalian=' . $pengembalian['id_pengembalian'] : 'save'; ?>" 
      method="POST" 
      class="space-y-4">

    <!-- PILIH PEMINJAMAN -->
    <div>
        <label class="block">Peminjaman:</label>
        <select name="id_peminjaman" class="border p-2 w-full" required>
            <option value="">-- Pilih Peminjaman --</option>

            <?php foreach ($peminjamanList as $p): ?>
                <option value="<?= $p['id_peminjaman']; ?>"
                    <?= (isset($pengembalian) && $pengembalian['id_peminjaman'] == $p['id_peminjaman']) ? 'selected' : ''; ?>>
                    <?= $p['nama_anggota'] . " - " . $p['judul']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</form>