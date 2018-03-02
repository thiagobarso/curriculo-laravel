#!/bin/bash
#Esse arquivo ira rodar as migracoes e os seeds do laravel referentes ao projeto

echo [INFO]...executando migracao das tabelas
php artisan migrate
echo [INFO]...executando semeacao das tabelas com valores
php artisan db:seed --class=EmpresaTableSeeder
php artisan db:seed --class=CargoTableSeeder
php artisan db:seed --class=PessoasTableSeeder
php artisan db:seed --class=PessoaHasCargoTableSeeder
echo FIM
 
