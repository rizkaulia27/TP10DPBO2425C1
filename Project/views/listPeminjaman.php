<?php require_once 'views/templates/header.php'; ?>

<h2 class="mt-4">Daftar Peminjaman</h2>
<a href="index.php?entity=peminjaman&action=add" class="btn btn-primary" style="margin-bottom: 15px; display: inline-block;">Add Peminjaman</a>

<table class="w-full border mt-3">
    <tr>
        <th class="border px-4 py-2">Nama Anggota</th>
        <th class="border px-4 py-2">Judul Buku</th>
        <th class="border px-4 py-2">Tgl Peminjaman</th>
        <th class="border px-4 py-2">Tgl Pengembalian</th>
        <th class="border px-4 py-2">Actions</th>
    </tr>

    <?php foreach ($peminjamanList as $p): ?>
        <tr>
            <td class="border px-4 py-2"><?= htmlspecialchars($p['nama_anggota']); ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($p['judul']); ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($p['tanggal_peminjaman']); ?></td>
            <td class="border px-4 py-2"><?= htmlspecialchars($p['tanggal_pengembalian']); ?></td>

            <td class="border px-4 py-2">
                <a href="index.php?entity=peminjaman&action=edit&id_peminjaman=<?= $p['id_peminjaman']; ?>" class="btn btn-primary">Edit</a> 
                <a href="index.php?entity=peminjaman&action=delete&id_peminjaman=<?= $p['id_peminjaman']; ?>"
                   onclick="return confirm('Hapus data peminjaman?');" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'views/templates/footer.php'; ?>
