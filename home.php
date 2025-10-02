<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        nav { background: #f4f4f4; padding: 15px; margin-bottom: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: #333; }
        nav a:hover { color: #007bff; }
        .container { max-width: 800px; margin: 0 auto; }
        .team-member { border: 1px solid #ddd; padding: 15px; margin: 10px 0; }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="pindex.php">Home</a>
            <a href="home.php">About</a>
        </nav>
        
        <h1>Tentang Kami</h1>
        <p>Ini adalah halaman tentang kami yang menjelaskan informasi mengenai website ini.</p>
        
        <h2>Tim Kami:</h2>
        
        <?php
        $team_members = [
            ['nama' => 'John Doe', 'jabatan' => 'Web Developer', 'email' => 'john@example.com'],
            ['nama' => 'Jane Smith', 'jabatan' => 'Designer', 'email' => 'jane@example.com'],
            ['nama' => 'Bob Johnson', 'jabatan' => 'Project Manager', 'email' => 'bob@example.com']
        ];
        
        foreach ($team_members as $member) {
            echo '<div class="team-member">';
            echo '<h3>' . $member['nama'] . '</h3>';
            echo '<p><strong>Jabatan:</strong> ' . $member['jabatan'] . '</p>';
            echo '<p><strong>Email:</strong> ' . $member['email'] . '</p>';
            echo '</div>';
        }
        ?>
        
        <h2>Statistik Pengunjung:</h2>
        <?php
        // Counter pengunjung sederhana
        $counter_file = 'counter.txt';
        
        if (file_exists($counter_file)) {
            $count = (int)file_get_contents($counter_file);
            $count++;
        } else {
            $count = 1;
        }
        
        file_put_contents($counter_file, $count);
        echo "<p>Jumlah pengunjung: $count</p>";
        ?>
        
        <p style="margin-top: 30px;">
            <a href="pindex.php">← Kembali ke Halaman Utama</a>
        </p>
    </div>
</body>
</html>
