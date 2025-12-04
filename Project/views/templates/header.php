<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Managemen Perpustakaan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", sans-serif;
        }

        body {
            background: #f7f7f7;
            padding: 30px;
            color: #333;
        }

        /* NAVIGATION */
        nav {
            background: white;
            padding: 15px 20px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        nav a {
            text-decoration: none;
            font-weight: 600;
            color: #444;
            padding: 8px 16px;
            border-radius: 8px;
            transition: 0.2s;
        }

        nav a:hover {
            background: #007bff;
            color: white;
        }

        h1 {
            margin-bottom: 10px;
        }

        /* TABLE */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #f0f0f0;
            font-weight: bold;
            text-align: left;
        }

        tr:hover {
            background: #fafafa;
        }

        /* BUTTON */
        .btn {
            padding: 6px 14px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            display: inline-block;
        }

        .btn-primary {
            background: #007bff;
            color: white;
        }

        .btn-danger {
            background: #dc3545;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }

        /* FORM */
        form {
            margin-top: 25px;
            background: white;
            border-radius: 12px;
            padding: 25px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: 600;
            margin-top: 15px;
            display: block;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background: #28a745;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>
    <nav>
        <a href="index.php?entity=buku">Buku</a>
        <a href="index.php?entity=penulis">Penulis</a>
        <a href="index.php?entity=anggota">Anggota</a>
        <a href="index.php?entity=peminjaman">Peminjaman</a>
        <a href="index.php?entity=pengembalian">Pengembalian</a>
    </nav>
    
    <hr>
</body>

</html>
