# Laravel-Projects

This is my first project with Laravel that implements :  
  
**Routing and Controllers: Basics**
 - Callback Functions and Route::view()
 - Routing to a Single Controller Method
 - Route Parameters
 - Route Naming
 - Route Groups

**Blade Basics** 
 - Displaying Variables in Blade
 - Blade If-Else and Loop Structures
 - Blade Loops
 - Layout: @include, @extends, @section, @yield
 - Blade Components

**Auth Basics**
 - Starter Kits: Breeze (Tailwind)
 - Default Auth Model and Access its Fields from Anywhere
 - Check Auth in Controller / Blade
 - Auth Middleware

**Database Basics**
 - Database Migrations
 - Basic Eloquent Model and MVC: Controller -> Model -> View
 - Eloquent Relationships: belongsTo / hasMany / belongsToMany
 - Eager Loading and N+1 Query Problem

**Full Simple CRUD**
 - Route Resource and Resourceful Controllers
 - Forms, Validation, and Form Requests
 - File Uploads and Storage Folder Basics
 - Table Pagination

**How to use**

 - Clone the repository with git clone
 - Copy .env.example file to .env and edit database credentials there
 - Run composer install
 - Run composer update if needed
 - Run php artisan key:generate
 - Run php artisan migrate --seed (it has some seeded data for your testing)
 - It will create 3 random users as authors by default. For details, you can see it in the database.
 - That's it: launch the main URL.
 - You can log in to manage articles with **emails** (see inside database) - **password**
 - You can log in to manage categories as an administrator with default credentials **admin@outlook.com - 12345**

**License**
 - Basically, feel free to use and reuse any way you want.
