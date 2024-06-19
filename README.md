## Jalankuy - Reservasi Destinasi Secara Online
Web reservasi pariwisata yang di lengkapi dengan dashboard admin, memudahkan untuk management data pemesanan. di sajikan dengan tampilan yang ramah di mata pengguna dan mudah untuk digunakan.

Paduan Download dan Install Dependensi yang dibbutuhkan dengan cara dibawah

```sh
git clone https://github.com/ahmdsk/VSGA-TRAVEL-AGENCY
cd VSGA-TRAVEL-AGENCY
composer install
php artisan migrate --seed
php artisan serve
```

Setelah itu local server akan berjalan di port 8000
http://127.0.0.1:8000

### Screenshoot
![Landing Page](/public/screenshot/landing_page.png "Landing Page")

![Riwayat Pemesanan](/public/screenshot/riwayat_pemesanan.png "Riwayat Pemesanan")

![Kelola Pemesanan](/public/screenshot/konfirmasi_pemesanan.png "Kelola Pemesanan")