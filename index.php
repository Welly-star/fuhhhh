<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Kontak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contact-form">
        <h2>Formulir Kontak</h2>
        <form action="yee.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subjek">Subjek:</label>
            <input type="text" id="subjek" name="subjek" required>

            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</body>
</html>