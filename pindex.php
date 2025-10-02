<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        nav { background: #f4f4f4; padding: 15px; margin-bottom: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: #333; }
        nav a:hover { color: #007bff; }
        .container { max-width: 800px; margin: 0 auto; }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="pindex.php">Home</a>
            <a href="home.php">About</a>
        </nav>
        
        <h1>Selamat Datang di Website Kami</h1>
        <p>Ini adalah halaman utama website sederhana menggunakan PHP.</p>
        
        <h2>Fitur Website:</h2>
        <ul>
            <li>Responsive design</li>
            <li>Navigasi sederhana</li>
            <li>Halaman statis</li>
        </ul>
        
        <div style="background: #e9ecef; padding: 15px; margin-top: 20px;">
            <h3>Informasi Server:</h3>
            <p>Waktu Server: <?php echo date('Y-m-d H:i:s'); ?></p>
            <p>PHP Version: <?php echo phpversion(); ?></p>
        </div>
    </div>
</body>
</html>
