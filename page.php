<?php
// landing-page.php

// proses form sederhana (jika user submit)
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $msg   = htmlspecialchars($_POST["message"]);

    // Bisa dikembangkan untuk simpan ke database / kirim email
    $message = "Terima kasih, $name! Pesan Anda sudah terkirim.";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0; padding: 0;
            background: #f5f6fa;
            color: #2f3640;
        }
        header {
            background: #0984e3;
            color: white;
            padding: 40px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        header p {
            font-size: 1.2rem;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
            text-align: center;
        }
        .btn {
            background: #00b894;
            color: white;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }
        .form-box {
            background: white;
            padding: 20px;
            margin-top: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        input, textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #dcdde1;
            border-radius: 6px;
        }
        button {
            background: #0984e3;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background: #74b9ff;
        }
        .message {
            margin: 20px 0;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Landing Page</h1>
        <p>Tingkatkan bisnis Anda dengan solusi digital terbaik</p>
        <a href="#form" class="btn">Hubungi Kami</a>
    </header>

    <div class="container">
        <h2>Tentang Kami</h2>
        <p>
            Kami menyediakan solusi teknologi untuk membantu bisnis Anda berkembang 
            lebih cepat dengan strategi digital yang tepat.
        </p>

        <div class="form-box" id="form">
            <h3>Form Kontak</h3>
            <?php if ($message): ?>
                <div class="message"><?= $message ?></div>
            <?php endif; ?>
            <form method="post" action="">
                <input type="text" name="name" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <textarea name="message" placeholder="Tulis pesan..." rows="4" required></textarea>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>
</body>
</html>
