# Book Management System - Laravel

A simple library book management system built with Laravel featuring complete CRUD operations and authentication.

## Features

- **Authentication** (Login & Logout)
- **Book CRUD** (Create, Read, Update, Delete)
- **Form Validation**
- **Pagination**
- **Responsive Design** (Tailwind CSS)
- **User Profile Management**

## Tech Stack

- **Framework**: Laravel 11.x
- **Database**: MySQL
- **Frontend**: Blade Template, Tailwind CSS
- **Authentication**: Laravel Breeze

## Installation Guide

### Prerequisites
- PHP >= 8.2
- Composer
- MySQL/MariaDB
- XAMPP (or any local server)
- Git

### Installation Steps

#### 1. Clone Repository
```bash
git clone https://github.com/YOUR_USERNAME/sistem-manajemen-buku-laravel.git
cd sistem-manajemen-buku-laravel
```

#### 2. Install Dependencies
```bash
composer install
npm install
```

#### 3. Environment Setup
```bash
# Copy .env.example to .env
cp .env.example .env

# Generate application key
php artisan key:generate
```

#### 4. Database Configuration

Update your `.env` file with the following database settings:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

**Important Notes:**
- The default database name is `laravel`
- You don't need to manually create the database in PHPMyAdmin
- Laravel will automatically create the database during migration

#### 5. Run Database Migrations

When you run the migration command, Laravel will prompt you to create the database if it doesn't exist:

```bash
php artisan migrate
```

You will see this prompt:
```
WARN  The database 'laravel' does not exist on the 'mysql' connection.
Would you like to create it? (yes/no) [yes]
```

Type **yes** or press **Enter** to confirm. Laravel will automatically:
1. Create the `laravel` database
2. Run all migrations and create necessary tables

**Alternative: Manual Database Creation**

If you prefer to create the database manually:
1. Open PHPMyAdmin (`http://localhost/phpmyadmin`)
2. Click "New" in the sidebar
3. Database name: `laravel`
4. Collation: `utf8mb4_unicode_ci`
5. Click "Create"
6. Then run `php artisan migrate`

#### 6. Compile Assets
```bash
npm run dev
```
Leave this terminal running, then open a new terminal for the next step.

#### 7. Run Development Server
Open a new terminal and run:
```bash
php artisan serve
```

Open your browser and visit: `http://localhost:8000`

## Usage Guide

### 1. Register/Login
- Click **"Register"** to create a new account
- Or click **"Login"** if you already have an account

### 2. Managing Books

**Add New Book:**
- Click **"Kelola Buku"** (Manage Books) in the navigation menu
- Click **"Tambah Buku Baru"** (Add New Book) button
- Fill in the form with book details
- Click **"Simpan Buku"** (Save Book)

**View Book Details:**
- Click the **"Detail"** button on any book

**Edit Book:**
- Click the **"Edit"** button on any book
- Modify the required fields
- Click **"Update Buku"** (Update Book)

**Delete Book:**
- Click the **"Hapus"** (Delete) button on any book
- Confirm the deletion

### 3. Profile Management
- Click your name in the top-right corner
- Select **"Profile"**
- You can update your name, email, and password

## Database Structure

### Table: books
| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key (auto-increment) |
| title | varchar(255) | Book title |
| author | varchar(255) | Author name |
| isbn | varchar(255) | ISBN number (unique) |
| year | integer | Publication year |
| description | text | Book description (nullable) |
| stock | integer | Stock quantity |
| created_at | timestamp | Creation timestamp |
| updated_at | timestamp | Last update timestamp |

### Table: users
| Column | Type | Description |
|--------|------|-------------|
| id | bigint | Primary key (auto-increment) |
| name | varchar(255) | User's full name |
| email | varchar(255) | Email address (unique) |
| password | varchar(255) | Hashed password |
| email_verified_at | timestamp | Email verification timestamp (nullable) |
| created_at | timestamp | Creation timestamp |
| updated_at | timestamp | Last update timestamp |

## Troubleshooting

### Common Issues

**Issue 1: Route not found error**
```bash
php artisan route:clear
php artisan config:clear
php artisan cache:clear
```

**Issue 2: Database connection error**
- Make sure XAMPP MySQL is running
- Verify database name in `.env` matches the database in PHPMyAdmin
- Check username and password in `.env`

**Issue 3: npm run dev errors**
```bash
npm install
npm run build
```

**Issue 4: Permission errors (Mac/Linux)**
```bash
chmod -R 775 storage bootstrap/cache
```

## Deployment Notes

For production deployment, remember to:
1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false` in `.env`
3. Configure proper database credentials
4. Run `php artisan config:cache`
5. Run `php artisan route:cache`
6. Run `npm run build` for production assets

## Developer

**[Your Name]**
- Email: mhilham987@gmail.com
- GitHub: [@lazuto123](https://github.com/lazuto123)
- LinkedIn: [Muhammad Ilham](https://www.linkedin.com/in/mhilham/)

## License

This project was created for technical assessment purposes.

## Acknowledgments

- Laravel Framework
- Laravel Breeze
- Tailwind CSS

---

**Note**: This is a test project demonstrating CRUD operations, authentication, and Laravel best practices.

If you find this project helpful, please consider giving it a star.
