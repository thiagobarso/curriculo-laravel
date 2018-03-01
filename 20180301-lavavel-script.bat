ECHO OFF
ECHO [INFO]...executando migracao das tabelas
php artisan migrate
ECHO [INFO]...executando semeacao das tabelas com valores
php artisan db:seed --class=EmpresaTableSeeder
php artisan db:seed --class=CargoTableSeeder
php artisan db:seed --class=PessoasTableSeeder
php artisan db:seed --class=PessoaHasCargoTableSeeder
ECHO FIM
