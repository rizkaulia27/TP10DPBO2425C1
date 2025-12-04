# TP10DPBO2425C1

# JANJI
Saya Rizka Aulia dengan NIM 2403245 mengerjakan Tugas Praktikum 10 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahan-Nya maka saya tidak akan melakukan kecurangan seperti yang telah di spesifikasikan

# DESAIN PROGRAM
1. Folder config : Folder ini berisi file Database.php yang berfungsi untuk membuat koneksi antara program dan database MySQL. Semua proses CRUD yang dilakukan oleh model akan selalu menggunakan koneksi yang dibuat di folder ini. Dengan pemisahan seperti ini, koneksi database menjadi terpusat sehingga lebih mudah dikelola dan diperbaiki jika terjadi masalah.

2. Folder database : Folder ini berisi file db_perpus.sql yang menyimpan struktur tabel serta data awal untuk sistem perpustakaan. File ini digunakan untuk membuat atau menginisialisasi ulang database pada server. Dengan adanya folder ini, pengembang lain bisa langsung membuat database yang sama tanpa perlu membuat ulang secara manual.

3. Folder models : Folder models berisi file-file seperti Anggota.php, Buku.php, Penulis.php, Peminjaman.php, dan Pengembalian.php. Setiap file mewakili satu tabel di database. Model bertugas melakukan operasi CRUD (Create, Read, Update, Delete) dan mengelola data secara langsung melalui query SQL. Model menjadi bagian inti yang mengatur logika pengolahan data di program, sehingga view atau bagian tampilan tidak berhubungan langsung dengan database.

4. Folder views : Folder ini berisi seluruh tampilan antarmuka program. Di dalamnya terdapat file seperti formAnggota.php, formBuku.php, formPenulis.php, formPeminjaman.php juga formPengembalian.php yang digunakan untuk menambah atau mengedit data. Selain itu terdapat juga listAnggota.php, listBuku.php, listPenulis.php, listPeminjaman.php dan listPengembalian.php yang menampilkan daftar data dari masing-masing tabel. Folder views juga memiliki subfolder templates yang berisi file header dan footer. Template ini digunakan untuk menampilkan tampilan yang konsisten di setiap halaman program.

5. Folder viewmodels : Folder viewmodels berisi penghubung antara view dan model. File seperti AnggotaViewModel.php, BukuViewModel.php, PenulisViewModel.php, PeminjamanViewModel.php, dan PengembalianViewModel.php bertugas menerima input dari view, mengatur prosesnya, kemudian memanggil model untuk menjalankan operasi database. Setelah proses selesai, ViewModel mengembalikan data kembali ke view agar dapat ditampilkan. Dengan adanya ViewModel, struktur program menjadi lebih teratur karena view tidak langsung berkomunikasi dengan database.

# ALUR PROGRAM
Alur kerja program dimulai ketika pengguna membuka halaman utama (index.php). Dari halaman ini, pengguna dapat memilih menu seperti Anggota, Buku, Penulis, Peminjaman, atau Pengembalian. Ketika pengguna ingin melihat data, halaman list akan ditampilkan oleh view, kemudian ViewModel memanggil model untuk mengambil data dari database dan menampilkannya ke layar.

Jika pengguna ingin menambah data baru, halaman form yang sesuai akan ditampilkan. Input yang diberikan pengguna akan dikirim ke ViewModel, kemudian ViewModel memanggil fungsi create pada model untuk menyimpan data ke database. Setelah proses berhasil, pengguna akan dikembalikan ke halaman daftar data.

Untuk proses edit, mekanismenya sama. ViewModel mengambil data dari model berdasarkan ID yang dipilih, kemudian menampilkan kembali ke form. Setelah pengguna menyimpan perubahan, ViewModel mengirimkan data tersebut ke fungsi update pada model.

Proses hapus juga melalui ViewModel. Ketika pengguna menekan tombol delete, ViewModel memanggil fungsi delete pada model untuk menghapus data dari database. 

# DOKUMENTASI
- CRUD Buku
https://github.com/user-attachments/assets/be57b1e7-73ed-4ca0-98a4-eab29d6008e4
- CRUD Penulis
https://github.com/user-attachments/assets/f13adc30-dfaf-4366-85b4-1a8413a3cff9
- CRUD Anggota
https://github.com/user-attachments/assets/b34b5d60-7d61-4d74-89e0-54ea165d40dc
- CRUD Peminjaman
https://github.com/user-attachments/assets/00127d11-6907-4023-afc2-63460d2c75ff
- CRUD Pengembalian
https://github.com/user-attachments/assets/6bfda758-510f-4829-9aa0-dd970829271d

