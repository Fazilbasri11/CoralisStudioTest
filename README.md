## Prasyarat

Sebelum menjalankan proyek ini, pastikan Anda memiliki hal-hal berikut:

- Sql terdapat dalam project
- PHP versi 7.2 atau yang lebih baru
- Composer (untuk mengelola dependensi PHP)
- MySQL Database Server
- Git

## Instalasi

1. Clone repository ini ke komputer lokal Anda dengan menjalankan perintah berikut melalui terminal atau command prompt:

   ```bash
   git clone <URL_repository_GitHub>
   ```

   Gantilah <URL_repository_GitHub> dengan URL repository GitHub yang telah Anda buat.

2. Masuk ke direktori proyek:

```bash
    cd namaprojek
```

3. Salin file .env.example menjadi .env:

```bash
cp .env.example .env
```

4. Konfigurasi Database:
   -Buka file .env menggunakan editor teks.
   -Temukan bagian database.default.
   -Ubah pengaturan berikut sesuai dengan konfigurasi database MySQL Anda:

```bash
database.default.hostname = localhost
database.default.database = coralisnew
database.default.username = <username_mysql>
database.default.password = <password_mysql>
database.default.DBDriver = MySQLi
```
