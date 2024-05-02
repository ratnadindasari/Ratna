<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Curriculum Vitae</h1>
        </div>
        <div class="main">
            <div class="profile">
                <img src="ratna.JPEG" alt="Profile Picture">
            </div>
            <div class=row>
            <div class="personal-info">
                <h2>Personal Information</h2>
                <?php
                $nama = "Ratna Dinda Sari";
                $alamat = "Jl. Bukit Tunggal VII C";
                $telepon = "089523555535";
                $agama = "Islam";
                $hobi = "Olahraga";
                $email = "ratnadinda142004@gmail.com";
                ?>
                <p><strong>Nama:</strong> <?php echo $nama; ?></p>
                <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
                <p><strong>Telepon:</strong> <?php echo $telepon; ?></p>
                <p><strong>Agama:</strong> <?php echo $agama; ?></p>
                <p><strong>Hobi:</strong> <?php echo $hobi; ?></p>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
            </div>

            <div class="education">
                <h2>Education</h2>
                <p><strong>SD:</strong> SDN 16 PEMECUTAN</p>
                <p><strong>SMP:</strong>SMP PGRI 1 DENPASAR</p>
                <p><strong>SMK:</strong> SMK PGRI 2 DENPASAR</p>
            </div>
            <div class="about me">
                <h2>Ebout me</h2>
                <p><strong>Saya memiliki semangat dan dedikasi yang tinggi dalam bekerja, jujur, dan cepat tanggap, memiliki kemampuan komunikasi yang baik, mudah beradaptasi dan suka mempelajari hal yang baru serta dapat bekerja dalam tim</p>
                
                
            </div>
        </div>
    </div>
</body>
</html>
