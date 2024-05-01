<?php
    include('koneksi.php');
    
    // Mendapatkan NIM dari URL
    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];
        
        // Query untuk mendapatkan data berdasarkan NIM
        $query = "SELECT * FROM surat_mahasiswa_aktif WHERE nim = '$nim'";
        $result = mysqli_query($koneksi, $query);
        
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $nim = $row["nim"];
            $nama = $row["nama"];
            $ttl = $row["ttl"];
            $alamat = $row["alamat"];
            $fakultas = $row["fakultas"];
            $prodi = $row["prodi"];
            $semester = $row["semester"];

            // Tampilkan data dalam format HTML
            echo "<!DOCTYPE html>
            <html>
            <head>
                <title>SURAT KETERANGAN</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 40px;
                    }
                    
                    h1 {
                        text-align: center;
                        font-size: 28px;
                        margin-bottom: 10px;
						margin-top: 50px;s
                    }
					h4 {
                        text-align: center;
                        font-size: px;
                        margin-bottom: 40px;

                    p {
                        margin-bottom: 10px;
                    }
                    
                    .content {
                        margin-top: 100px;
                        text-align: justify;
                    }
                    
                    .content p {
                        text-indent: 50px;
                        line-height: 1.5;
                    }
                </style>
            </head>
            <body>
			<h1>SURAT KETERANGAN</h1>
                <div class='content'>
                    <h4><u> Nomor : &nbsp;  &nbsp; &nbsp; &nbsp;/UNIWARA.SKMA/2023</u></h4>
                    <p>Yang bertanda di bawah ini, Universitas PGRI Wiranegara menerangkan dengan sesungguhnya bahwa :</p>
                    <br>
                    <p><strong>Nama:</strong> $nama</p>
                    <p><strong>Tempat Tanggal Lahir:</strong> $ttl</p>
                    <p><strong>Alamat:</strong> $alamat</p>
                    <br>
                    <p>Yang bersangkutan saat ini terdaftar sebagai mahasiswa Universitas PGRI Wiranegara pada :</p>
                    <p><strong>Fakultas:</strong> $fakultas</p>
                    <p><strong>Program Studi:</strong> $prodi</p>
                    <p><strong>NIM:</strong> $nim</p>
                    <p><strong>Semester:</strong> $semester </p>
                    <br><br>
                    <p>Demikian surat keterangan ini digunakan sebagai Keterangan Mahasiswa Aktif.</p>
                </div>
            </body>
            </html>";
        } else {
            echo "Data surat mahasiswa aktif tidak ditemukan.";
        }
    }
?>
