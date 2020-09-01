# Divisi-Kemitraan

## Installation

Pertama sekali meng-clone projectAPI kemudian diikuti dengan testdashboard

Projek yang pertama kali dijalankan adalah projectAPI agar dashboard dapat ditampilkan
projek harus dijalankan dengan bantuan jaringan internet dengan server XAMPP yang terhubung

--Projek projectAPI
1. git clone
2. cd projectAPI
3. cp .env.example .env
4. composer install
5. php artisan key:generate
6. Edit .env
	- set the database connection => lppm_itdel
7. import DB: lppm_itdel.sql to the phpMyAdmin
8. run in terminal : php -S localhost:8000 -t public

-- Projek testdashboard
1. git clone
2. cd testdashboard
3. cp .env.example .env
4. composer install
5. php artisan key:generate
6. Edit .env
	- set the database connection => lppm_itdel
7. import DB: lppm_itdel.sql to the phpMyAdmin
8. run in terminal : php artisan serve --port=8002
