# Laravel CRUD Generator - Complete Guide

This document walks you through the complete setup and usage of the **Laravel CRUD Generator** package (`ibex/crud-generator`) to scaffold CRUD operations efficiently.

---

## 📦 Step 1: Create a Laravel Project

Use Composer to create a new Laravel project:

```bash
composer create-project laravel/laravel project_name
cd project_name
```

Replace `project_name` with your preferred name.

---

## 🧱 Step 2: Create a Base Layout (`app.blade.php`)

Create a base Blade layout file using Bootstrap (or Tailwind, based on your preference):

### Create the file structure:

```bash
mkdir -p resources/views/layouts
touch resources/views/layouts/app.blade.php
```

### Sample `app.blade.php` (Bootstrap version):

```html
<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>@yield('title', 'My Laravel App')</title>

        <!-- Bootstrap 5 CSS CDN -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />

        @stack('styles')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">My Laravel App</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <!-- Add more nav items here -->
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container">@yield('content')</main>

        <footer class="bg-light text-center py-3 mt-5">
            <div class="container">
                <small
                    >&copy; {{ date('Y') }} My Laravel App. All rights
                    reserved.</small
                >
            </div>
        </footer>

        <!-- Bootstrap 5 JS Bundle CDN (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        @stack('scripts')
    </body>
</html>
```

> You can switch to Tailwind by replacing the Bootstrap CDN with Tailwind CSS CDN.

---

## 🗃️ Step 3: Create a Migration

Generate a migration for the table you want to work with. Example:

```bash
php artisan make:migration create_banks_table
```

### Edit the generated migration file:

```php
// database/migrations/xxxx_xx_xx_xxxxxx_create_banks_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('account_no');
            $table->string('iban');
            $table->string('swift');
            $table->string('manufracturer_address');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('banks');
    }
};
```

### Run the migration:

```bash
php artisan migrate
```

---

## ⚙️ Step 4: Install the CRUD Generator Package

### Install the package:

```bash
composer require ibex/crud-generator --dev
```

### (Optional) Publish the config:

```bash
php artisan vendor:publish --tag=crud
```

---

## 🚀 Step 5: Generate CRUD

Use the following Artisan command to generate CRUD files:

```bash
php artisan make:crud banks
```

This will generate:

-   Model: `App\Models\Bank`
-   Controller: `App\Http\Controllers\BankController`
-   Views: `resources/views/banks`
-   FormRequest: `StoreBankRequest`, `UpdateBankRequest`
-   Routes (you need to manually register)

---

## 🌐 Step 6: Register the Route

Open `routes/web.php` and add the following:

```php
use App\Http\Controllers\BankController;

Route::resource('banks', BankController::class);
```

---

## ✅ Step 7: Run the Project

Run the Laravel development server:

```bash
php artisan serve
```

Visit [http://localhost:8000/banks](http://localhost:8000/banks) to see your generated CRUD interface for the `banks` table.

---

## OR click the below link and read the document in details

```bash
https://medium.com/@awais.sds/laravel-11-x-10-x-crud-generator-c5610150f268
```

## 📌 Additional Notes

-   You can customize the layout or any generated files to match your project design.
-   CRUD views are generated using the `layouts.app` layout.
-   To customize templates, you may edit the published stubs (after running `vendor:publish`).

---

Happy coding! 🎉

how to used laravel generator package

first of all create laravel project
composer require laravel/project_name
then create app.blade.php file in the views/layouts
using bootstrap or tailwind based on you
then create a migration what you want like below
php artisan make:migration "create banks"
or any other simple table you want
then

Installation
1 — Install
composer require ibex/crud-generator --dev

2- Publish the default package’s config (optional)
php artisan vendor:publish --tag=crud

Usage
php artisan make:crud {table_name}

example below
php artisan make:crud banks

Add a route in web.php
Route::resource('banks', BankController::class);
