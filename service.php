<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="Index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="Gambar/Pesawat.png"/>
    <script src="index.js"></script>
</head>
    <body>
        <nav> 
            <div class="Introduce">
                <a href="Index1.php">
                    <h1><img src="Gambar/Pesawat.png" alt="" >Logistik Asikk</h1>
                </a>
            </div>
            <ul>
                <li>
                    <a href="Index1.php">Home</a>
                </li>
                <li>
                    <a href="About.html">About</a>
                </li>
                <li id="service">
                    <a href="service.php">Services</a>
                </li>
                <li>
                    <a href="logout.php">Log Out</a>
                </li>
                <li><img src="gambar/moon1.png" id="icon" width="15px" ?>
                </li>
            </ul>
        </nav>
    <div class="judul">
        <p align = "center"> Form Service </p>
    </div>
    
    <main>
    <div class="form">
            <div class="kotak">
                <form action="tampil_layanan.php" method="post">
                    <div class="isi">
                        <div class="input-box">
                            <span class="detail"> Nama Pemesan </span>
                            <input type="text" name="nama" placeholder="Masukan Nama Anda" required>
                        </div>
                        <div class="input-box">
                            <span class="detail"> Alamat Pemesan </span>
                            <input type="text" name="alamat" placeholder="Masukan Alamat Anda" required>
                        </div>
                        <div class="input-box">
                            <span class="detail"> Nomor Telepon </span>
                            <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor HP anda" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
                        </div>
                        <div class="select-box">
                            <span class="detail"> Jenis Layanan </span>
                            <select>
                                <option value="Sea Fright">Sea Fright</option>
                                <option value="Land Transportation">Land Transportation</option>
                                <option value="Air Fright">Air Fright</option>
                                <option value="Storage">Storage</option>
                            </select>
                        </div>
                        <div class="input-check">
                            <input type="radio" name="metode" id="dot-1">
                            <input type="radio" name="metode" id="dot-2">
                            <span class="metode-judul"> Metode Pembayaran </span>
                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="metode">Cash</span>
                                </label>
                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="metode">Transfer</span>
                                </label>
                            </div>
                        </div>
                        </div>
                        <div class="button-submit">
                            <input type="submit" style ="comic sans ms" value="kirim">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </main>
    <footer>
            Copyright &copy; 2022
            Designed by Rama 
            <div class="contact"> 
                <a href="https://wa.me/08978284996">
                    Contact us
                </a>
            </div>
        </footer>
</body>
</html>