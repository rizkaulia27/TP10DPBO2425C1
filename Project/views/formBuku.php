<?php
require_once 'views/templates/header.php';
?>

<h2 class="text-xl mb-4">
    <?= isset($buku) ? 'Edit Buku' : 'Tambah Buku'; ?>
</h2>

<form action="index.php?entity=buku&action=<?= isset($buku) ? 'update&id_buku=' . $buku['id_buku'] : 'save'; ?>" method="POST" class="space-y-4">
    <!-- JUDUL BUKU -->
    <div>
        <label class="block">Judul Buku:</label>
        <input type="text" name="judul" value="<?= isset($buku) ? $buku['judul'] : ''; ?>" class="border p-2 w-full" required>
    </div>

    <!-- PENULIS (DROPDOWN) -->
    <div>
        <label class="block">Penulis:</label>
        <select name="penulis" class="border p-2 w-full" required>
            <option value="">-- Pilih Penulis --</option>

            <?php foreach ($penulisList as $p): ?>
                <option value="<?= $p['id_penulis']; ?>"
                    <?= (isset($buku) && $buku['penulis'] == $p['id_penulis']) ? 'selected' : ''; ?>>
                    <?= $p['nama_penulis']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- TAHUN TERBIT -->
    <div>
        <label class="block">Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" value="<?= isset($buku) ? $buku['tahun_terbit'] : ''; ?>" class="border p-2 w-full" required>
    </div>

    <!-- STOK -->
    <div>
        <label class="block">Stok:</label>
        <input type="number" name="stok" value="<?= isset($buku) ? $buku['stok'] : ''; ?>" class="border p-2 w-full" required>
    </div>

    <!-- BUTTON -->
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
        Simpan
    </button>
</form>