<?php
require_once 'viewmodels/BukuViewModel.php';
require_once 'viewmodels/PenulisViewModel.php';
require_once 'viewmodels/AnggotaViewModel.php';
require_once 'viewmodels/PeminjamanViewModel.php';
require_once 'viewmodels/PengembalianViewModel.php';

$entity = isset($_GET['entity']) ? $_GET['entity'] : 'buku';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($entity === 'buku') {
    $bukuVM = new BukuViewModel();

    switch ($action){
        case 'list':
            $bukuList = $bukuVM->getBukuList();
            require_once 'views/listBuku.php';
            break;
        case 'add':
            $penulisList = $bukuVM->getPenulisList();
            require_once 'views/formBuku.php';
            break;
        case 'edit':
            $id_buku = $_GET['id_buku'];
            $buku = $bukuVM->getBukuById($id_buku);
            $penulisList = $bukuVM->getPenulisList();
            require_once 'views/formBuku.php';
            break;
        case 'save':
            $judul = $_POST['judul'];
            $penulis = $_POST['penulis'];
            $tahun_terbit = $_POST['tahun_terbit'];
            $stok = $_POST['stok'];
            $bukuVM->addBuku($judul, $penulis, $tahun_terbit, $stok);
            header('Location: index.php?entity=buku&action=list');
            break;
        case 'update':
            $id_buku = $_GET['id_buku'];
             $judul = $_POST['judul'];
            $penulis = $_POST['penulis'];
            $tahun_terbit = $_POST['tahun_terbit'];
            $stok = $_POST['stok'];
            $bukuVM->updateBuku($id_buku, $judul, $penulis, $tahun_terbit, $stok);
            header('Location: index.php?entity=buku&action=list');
            break;
        case 'delete':
            $id_buku = $_GET['id_buku'];
            $bukuVM->deletebuku($id_buku);
            header('Location: index.php?entity=buku&action=list');
            break;
        default:
            echo "Invalid action.";
            break;
    }
}elseif ($entity === 'penulis'){
    $penulisVM = new PenulisViewModel();

    switch ($action) {
        case 'list':
            $penulisList = $penulisVM->getPenulisList();
            require_once 'views/listPenulis.php';
            break;
        case 'add':
            require_once 'views/formPenulis.php';
            break;
        case 'edit':
            $id_penulis = $_GET['id_penulis'];
            $penulis = $penulisVM->getPenulisById($id_penulis);
            require_once 'views/formPenulis.php';
            break;
        case 'save':
            $nama_penulis = $_POST['nama_penulis'];
            $bio = $_POST['bio'];
            $penulisVM->addPenulis($nama_penulis, $bio);
            header('Location: index.php?entity=penulis&action=list');
            break;
        case 'update':
            $id_penulis = $_GET['id_penulis'];
            $nama_penulis = $_POST['nama_penulis'];
            $bio = $_POST['bio'];
            $penulisVM->updatePenulis($id_penulis, $nama_penulis, $bio);
            header('Location: index.php?entity=penulis&action=list');
            break;
        case 'delete':
            $id_penulis = $_GET['id_penulis'];
            $penulisVM->deletePenulis($id_penulis);
            header('Location: index.php?entity=penulis&action=list');
            break;
        default:
            echo "Invalid action.";
            break;
    }
}elseif ($entity === 'anggota'){
    $anggotaVM = new AnggotaViewModel();

    switch ($action) {
        case 'list':
            $anggotaList = $anggotaVM->getAnggotaList();
            require_once 'views/listAnggota.php';
            break;
        case 'add':
            require_once 'views/formAnggota.php';
            break;
        case 'edit':
            $id_anggota = $_GET['id_anggota'];
            $anggota = $anggotaVM->getAnggotaById($id_anggota);
            require_once 'views/formAnggota.php';
            break;
        case 'save':
            $nama_anggota = $_POST['nama_anggota'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $anggotaVM->addAnggota($nama_anggota, $email, $alamat);
            header('Location: index.php?entity=anggota&action=list');
            break;
        case 'update':
            $id_anggota = $_GET['id_anggota'];
            $nama_anggota = $_POST['nama_anggota'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $anggotaVM->updateAnggota($id_anggota, $nama_anggota, $email, $alamat);
            header('Location: index.php?entity=anggota&action=list');
            break;
        case 'delete':
            $id_anggota = $_GET['id_anggota'];
            $anggotaVM->deleteAnggota($id_anggota);
            header('Location: index.php?entity=anggota&action=list');
            break;
        default:
            echo "Invalid action.";
            break;
    }
}elseif ($entity === 'peminjaman'){
    $peminjamanVM = new PeminjamanViewModel();

    switch ($action) {
        case 'list':
            $peminjamanList = $peminjamanVM->getPeminjamanList();
            require_once 'views/listPeminjaman.php';
            break;
        case 'add':
            $anggotaList = $peminjamanVM->getAnggotaList();
            $bukuList = $peminjamanVM->getBukuList();
            require_once 'views/formPeminjaman.php';
            break;
        case 'edit':
            $id_peminjaman = $_GET['id_peminjaman'];
            $peminjaman = $peminjamanVM->getpeminjamanById($id_peminjaman);
            $anggotaList = $peminjamanVM->getAnggotaList();
            $bukuList = $peminjamanVM->getBukuList();
            require_once 'views/formPeminjaman.php';
            break;
        case 'save':
            $anggota = $_POST['id_anggota'];
            $buku = $_POST['id_buku'];
            $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
            $peminjamanVM->addpeminjaman($anggota, $buku, $tanggal_pengembalian);
            header('Location: index.php?entity=peminjaman&action=list');
            break;
        case 'update':
            $id_peminjaman = $_GET['id_peminjaman'];
            $anggota = $_POST['id_anggota'];
            $buku = $_POST['id_buku'];
            $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
            $peminjamanVM->updatepeminjaman($id_peminjaman, $anggota, $buku, $tanggal_pengembalian);
            header('Location: index.php?entity=peminjaman&action=list');
            break;
        case 'delete':
            $id_peminjaman = $_GET['id_peminjaman'];
            $peminjamanVM->deletepeminjaman($id_peminjaman);
            header('Location: index.php?entity=peminjaman&action=list');
            break;
        default:
            echo "Invalid action.";
            break;
    }
}elseif ($entity === 'pengembalian'){
    $pengembalianVM = new PengembalianViewModel();

    switch ($action) {
        case 'list':
            $pengembalianList = $pengembalianVM->getPengembalianList();
            require_once 'views/listPengembalian.php';
            break;
        case 'add':
            $peminjamanList = $pengembalianVM->getPeminjamanList();
            require_once 'views/formPengembalian.php';
            break;
        case 'edit':
            $id_pengembalian = $_GET['id_pengembalian'];
            $pengembalian = $pengembalianVM->getpengembalianById($id_pengembalian);
            $peminjamanList = $pengembalianVM->getPeminjamanList();
            require_once 'views/formPengembalian.php';
            break;
        case 'save':
            $id_peminjaman = $_POST['id_peminjaman'];
            $pengembalianVM->addPengembalian($id_peminjaman);
            header('Location: index.php?entity=pengembalian&action=list');
            break;
        case 'update':
            $id_pengembalian = $_GET['id_pengembalian'];
            $id_peminjaman = $_POST['id_peminjaman'];
            $pengembalianVM->updatePengembalian($id_pengembalian, $id_peminjaman);
            header('Location: index.php?entity=pengembalian&action=list');
            break;
        case 'delete':
            $id_pengembalian = $_GET['id_pengembalian'];
            $pengembalianVM->deletePengembalian($id_pengembalian);
            header('Location: index.php?entity=pengembalian&action=list');
            break;
        default:
            echo "Invalid action.";
            break;
    }
}else{
    echo "Invalid entity.";
}
