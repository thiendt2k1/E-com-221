#PHP MVC SYSTEM
Using php to create a coffee sale coffee website <br /> <br />
With mvc structure we divide project into many folder: <br />

./bootstrap: contain bootstrap framework. <br />
./font: contain font. <br />
./img: contain img. <br />
./views: contain files to display front-end. <br />
./models: contain php files to deploy back-end. <br />
./controllers: contain php to deploy back-end. <br />
./migrations: update database. <br />
./middlewares: contain middleware. <br />
./core: contain the core classes. <br />

It's a simple php-mvc template version 1.0. We will maintain and develop in future.

## SET UP
### Installation
1. To run php and mysql conveniently together install XAMPP: 
    - https://www.apachefriends.org/download.html
2. After that install Composer (a PHP package manager):
    - https://getcomposer.org/download/
3. Restart computer
4. Delete *vendor* folder if exist
5. Check for Composer version:
```
composer --version
```
6. Install project packages:

```
composer install
```
### Generating MySQL Database:

MySQL Config:
```
Server host : localhost
Database : thecoffeehouse
Port : 3306
Username : root
Password : (optional)
```

### Creating dotenv

In folder project, create file .env with the following config:

```bash
DB_DSN=mysql:host=localhost;dbname=ecom
DB_USER=root
DB_PASSWORD=admin
```
### Run migration:
In terminal:
```bash
php migrations.php
```
The terminal should return:
```bash
[2021-10-28 19:10:49] - Applying migration m0001_initial.php
[2021-10-28 19:10:49] - Applyied migration m0001_initial.php
```

Else, drop all table in database and re-run migration
## Run project

To run the project, type the following into the terminal:

```bash
cd public
php -S localhost:8000
```
