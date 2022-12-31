
# SATCOV ONLINE TRADING

SATCOV TRADING merupakan sebuah web application yang memberikan kemudahan atau memberikan layanan untuk melakukan sebuah trading saham bagi pengguna yang ingin melakukan investasi. SATCOV TRADING sendiri dapat digunakan oleh siapapun dengan catatan memiliki laptop atau perangkat lunak yang sudah compatible dan didukung oleh browser yang mumpuni seperti Chrome, Edge, Firefox, etc.

![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/logo.png)



## Tech 

**Client:** PHP, HTML, CSS, Javascript

**Server:** Ngrok, XAMPP


## Initial Set Up
Sebelum membuka aplikasi ini, dibutuhkan beberapa tools, antara lain:

-XAMPP

Download XAMPP pada link dibawah ini
```
https://www.apachefriends.org/
```

Lakukan instalasi setelah Anda selesai mengunduh. Selama proses instalasi mungkin Anda akan melihat pesan yang menanyakan apakah Anda yakin akan menginstalnya. Silakan tekan Yes untuk melanjutkan instalasi.

> :warning: **Install XAMPP pada lokasi default yaitu pada C/xampp**

Setelah itu jalankan XAMPP, lalu check apakah Apache dan MySql menyala, apabila menyala maka matikan terlebih dahulu

![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/XAMPP_Windows_10.png)

Setelah mematikannya lalu buka Config dibagian Apache.

![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/XAMPP_Windows_102.png)

Setelah menekan Config maka akan muncul pilihan, lalu pilih PHP(php.ini).

![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/XAMPP_Windows_103.png)

Setelah menekan itu maka akan muncul php.ini di notepad lalu tekan ctrl + f, lalu cari gd.

![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/XAMPP_Windows_104.png)

Lalu hapus ; pada
```
;extension=gd
```
Menjadi
```
extension=gd
```
Setelah menghapus itu, jangan lupa untuk menekan ctrl + s, untuk menyimpan file php.ini yang telah diubah.
Setelah selesai maka anda bisa menutup notepadnya dan kembali ke menu utama XAMPP, setelah masuk ke menu utama jangan lupa untuk menyalakan kembali Apache dan MySql.

![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/XAMPP_Windows_10.png)

Setelah dinyalakan anda dapat mengecek apakah XAMPP sudah berjalan dengan benar dengan cara memasukkan command berikut pada browser yang anda gunakan:
```
localhost/phpmyadmin
```
Jika sudah benar maka tampilannya akan seperti dibawah ini.
![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/XAMPP_Windows_105.png)

## Install Database
Setelah berhasil menginstall XAMPP, bukalah halaman berikut pada browser anda
```
localhost/phpmyadmin
```
Setelah itu tekan tombol new seperti gambar dibawah ini

![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/XAMPP_Windows_106.png)

Setelah itu masukkan nama database yaitu
```
satcov
```
dan tipe 
```
utf8mb4_general_ci
```
Untuk lebih jelasnya dapat melihat gambar dibawah ini
![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/XAMPP_Windows_108.png)

Setelah itu tekan create, maka proses pembuatan database telah selesai. Selanjutnya adalah mengimport seluruh tabel dari file
```
Satcov_DB.sql
```

File tersebut ada pada folder yang telah di extrak sebelumnya, kemudian pilih active database satcov
lalu tekan import

![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/XAMPP_Windows_109.png)

Setelah menekan import maka akan muncul tampilan seperti dibawah, lalu tekan choose file lalu masukkan file *Satcov_DB.sql*

![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/XAMPP_Windows_110.png)

Setelah selesai choose file, maka langkah Selanjutnya adalah scroll kebagian bawah maka akan ada tombol import, tekan tombol import tersebut. Setelah selesai menekan tombol insert maka selurut data telah masuk kedalam database.

## Install Web
Pertama download terlebih dahulu file web yang terdapat pada repo
```
https://github.com/mobs3288/SATCOV_ONLINE_TRADING
```

Setelah mendowload nya anda harus mengekstrak file tersebut di laptop/komputer anda pada lokasi
```
c/xampp/htdocs
```

Setelah berhasil mengekstrak file tersebut rename lah folder tersebut menjadi
```
satcov
```

Setelah melakukan rename, maka Web sudah terinstall sepenuhnya. Untuk menjalankan web nya XAMPP harus selalu menyala dan masukkan link berikut pada browser pilihan anda
```
localhost/satcov
```
Setelah memasukkan link tersebut maka web terload sepenuhnya.

> :warning: **Untuk fitur Forget Password hubungi pemilik repo ini dikarenakan mengandung informasi yang sensitif**


## Running Tests

Untuk melakukan testing gunakanlah Visual Studio Code, kemudian open folder project ini, lalu tekan:

- Terminal
- New Terminal

Lalu masukkan command berikut.

```bash
  php vendor/bin/phpunit --bootstrap ./vendor/autoload.php ./testing/Testing.php   
```
Hasil Testing:
![alt text](https://github.com/mobs3288/SATCOV_ONLINE_TRADING/blob/main/assets/init/Hasil%20Testing.png)

> :warning: **Setelah melakukan testing anda diharuskan untuk melakukan import ulang database**


## Contributor

- GAYUH PUTRI ANDYANI | 1301204050
- RIFKY FAHRIZAL UBAIDILLAH | 1301204054
- RYAN OKTAVIANDI SUSILO WIBOWO | 1301204289
- MUHAMMAD KHALID HABIBURAHMAN | 1301204437
- ZAIDAN FADHILLAH | 1301204518



