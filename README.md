# Laravel Transport Units Project

This is a Laravel project for managing transport units with features for creating, updating, deleting, and filtering units. The project uses Vite for asset bundling and includes database seeding for initial data.

## Table of Contents

- [Requirements](#requirements)
- [Setup](#setup)
- [Database Seeding](#database-seeding)
- [Running the Project](#running-the-project)
- [Frontend Setup with Vite](#frontend-setup-with-vite)
- [Testing](#testing)
- [Overview](#overview)
- [Troubleshooting](#troubleshooting)

## Requirements

- PHP 8.0 or higher
- Composer
- Node.js (v16 or higher)
- Laravel 11
- MySQL or another supported database

## Setup

1. **Clone the Repository**

   ```bash
   git clone https://github.com/your-username/your-repository.git
   cd your-repository
   ```

2. **Install PHP Dependencies**

   ```bash
   composer install
   ```

3. **Copy Environment File**

   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key**

   ```bash
   php artisan key:generate
   ```

## Database Seeding

To seed the database with initial data:

1. **Configure Database Connection**

   Update your `.env` file with your database credentials:

   ```dotenv
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

2. **Run Migrations**

   ```bash
   php artisan migrate
   ```

3. **Seed the Database**

   ```bash
   php artisan db:seed
   ```

   This will populate the database with example transport units.

## Running the Project

1. **Start the Laravel Development Server**

   ```bash
   php artisan serve
   ```

   This will start the server at `http://localhost:8000`.

2. **Access the Application**

   Open your browser and navigate to `http://localhost:8000` to access the application.

## Frontend Setup with Vite

1. **Install Node.js Dependencies**

   ```bash
   npm install
   ```

2. **Start the Vite Development Server**

   ```bash
   npm run dev
   ```

3. **Build the Frontend for Production**

   ```bash
   npm run build
   ```

   This will compile and optimize your assets for production and output them to the `public` directory.

## Testing

To run tests, make sure you have set up your test database and then execute:

```bash
php artisan test
```

## Overview

This project is designed to manage transport units. You can:

- **Create**: Add new transport units
- **Update**: Modify existing units.
- **Delete**: Remove units from the database.
- **Filter and Paginate**: Retrieve units with search, optional filters and pagination.

---

Coded by Mathias Villadsen.