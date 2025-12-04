<?php
require_once 'views/templates/header.php';
?>

<h2 class="text-xl mb-4">
    <?= isset($peminjaman) ? 'Edit Peminjaman' : 'Tambah Peminjaman'; ?>
</h2>

<form action="index.php?entity=peminjaman&action=<?= isset($peminjaman) ? 'update&id_peminjaman=' . $peminjaman['id_peminjaman'] : 'save'; ?>" method="POST" class="space-y-4">

    <!-- ANGGOTA -->
    <div>
        <label class="block">Anggota:</label>
        <select name="id_anggota" class="border p-2 w-full" required>
            <option value="">-- Pilih Anggota --</option>
            <?php foreach ($anggotaList as $a): ?>
                <option value="<?= $a['id_anggota']; ?>"
                    <?= (isset($peminjaman['anggota']) && $peminjaman['anggota'] == $a['id_anggota']) ? 'selected' : ''; ?>>
                    <?= $a['nama_anggota']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- BUKU -->
    <div>
        <label class="block">Buku:</label>
        <select name="id_buku" class="border p-2 w-full" required>
            <option value="">-- Pilih Buku --</option>
            <?php foreach ($bukuList as $b): ?>
                <option value="<?= $b['id_buku']; ?>"
                    <?= (isset($peminjaman['buku']) && $peminjaman['buku'] == $b['id_buku']) ? 'selected' : ''; ?>>
                    <?= $b['judul']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- TANGGAL KEMBALI -->
    <div>
        <label class="block">Tanggal Kembali (opsional):</label>
        <input type="date" name="tanggal_pengembalian"
               value="<?= isset($peminjaman['tanggal_pengembalian']) ? $peminjaman['tanggal_pengembalian'] : ''; ?>"
               class="border p-2 w-full">
    </div>

    <button class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
</form>
