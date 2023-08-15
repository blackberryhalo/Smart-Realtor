<div align="center">
  
## BOCHK Smart Realtor - Smart Contract Rental

</div>

## Prerequisite: MySQL, Visual studio redistributable, composer

For Windows, please refer this to install WSL and Docker Desktop additionally: https://laravel.com/docs/10.x#getting-started-on-windows

## After clone or download this project, please follow the instructions

> Clone the repository with **_git clone https://github.com/blackberryhalo/Smart-Realtor.git_**

> Run **_cd Smart-Realtor_**

Copy **.env.example** file to **.env** and edit **Database** credentials, be sure the following **DB_USERNAME** and **DB_PASSWORD** matches the MySQL server running on your localhost:

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD="password"
```

In Windows, run:
```
copy .env.example .env
```

In Linux/Mac, run:
```
cp .env.example .env
```

Install others before starting:

```
composer install
```

```
php artisan key:generate
```

After configuring your MySQL database, run migrations:
```
php artisan migrate
```

```
npm install
```

```
php artisan serve
```

## House Rental Address:localhost:8000
## House Rental Dashboard Address:localhost:8000/dashboard
> Login Account: **_admin@gamil.com_**
> Login Password: **_admin_**

## Demo
## HomePage Demo
<img src="https://github.com/blackberryhalo/Smart-Realtor/blob/main/z_others/demo-images/Homepage.png"/>

## Entire Properties Index Page
<img src="https://github.com/blackberryhalo/Smart-Realtor/blob/main/z_others/demo-images/Property-Index.png"/>

## Property Detail Page
<img src="https://github.com/blackberryhalo/Smart-Realtor/blob/main/z_others/demo-images/Property-Detail.png"/>

## Dashboard Property Listing Page
<img src="https://github.com/blackberryhalo/Smart-Realtor/blob/main/z_others/demo-images/Property-Listing.png"/>


