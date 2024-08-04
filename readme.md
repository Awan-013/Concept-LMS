Project Concept LMS untuk UAS Semester 1 

Nama : Hary Kurniawan

Nim : 230401010290

Laravel 5.5

Run locally :

copy & rename .env.example -> .env

run

php artisan migrate

php artisan db:seed --class=QuestionsTableSeeder

php artisan db:seed --class=UsersTableSeeder

php artisan key:generate


user 
awanama@tes.com
12345678

admin@tes.com
12345678
