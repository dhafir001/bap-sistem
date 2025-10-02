<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pengajuan BAP</title>
</head>
<body>
    <h2>Form Pengajuan BAP</h2>
    <form action="/pengajuan" method="POST">
        @csrf
        <label>Nomor Permohonan:</label><br>
        <input type="text" name="nomor_permohonan" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Paspor:</label><br>
        <input type="text" name="paspor" required><br><br>

        <label>Tujuan:</label><br>
        <textarea name="tujuan"></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
