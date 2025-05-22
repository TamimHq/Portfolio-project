# Portfolio Projects – Laravel CRUD Application

A simple Laravel-based CRUD application to manage portfolio projects. Built as part of an internship assignment to demonstrate core Laravel concepts including MVC, routing, form handling, file uploads, and database integration.

## 🧾 Laravel Version

- **Laravel Version:** 10.x
## ⚙️ Setup Instructions

Follow the steps below to run this project locally:

1. **Clone the Repository**

   ```bash
   git clone https://github.com/TamimHq/Portfolio-project.git
   cd Portfolio-project
2. **Install PHP Dependency**
   composer install
3. **Create Environment File**
   cp .env.example .env
4. **Set Application Key**
   php artisan key:generate
5. **Configure .env File**
   DB_DATABASE=portfolio_crud
   DB_USERNAME=root
   DB_PASSWORD=
6. **Run Migrations**
   php artisan migrate
7.**Link Storage (for image upload)**
   php artisan storage:link
8.**Start the Development Server**
   php artisan serve
## Database Name

-**Database Name to Use:** portfolio_crud

Create this database in your local MySQL or phpMyAdmin before running migrations.

## Additional Notes
-Image uploads are stored in storage/app/public/images and accessed via public/storage/images thanks to php artisan storage:link.

-Status field supports two values: draft and published.


