<svg xmlns="http://www.w3.org/2000/svg" width="93.168" height="44.917" viewBox="0 0 193.168 144.917"><g id="logo_-_small" data-name="logo - small" transform="translate(0 0.5)"><g id="Group_4" data-name="Group 4" transform="translate(-53.665 -77.791)"><g id="Group_9" data-name="Group 9"><path id="Path_12" data-name="Path 12" d="M149.859,184.042V130.3a96.786,96.786,0,0,0-.65-11.631,27.956,27.956,0,0,0-2.614-9.214,14.6,14.6,0,0,0-5.568-6.059,18.3,18.3,0,0,0-9.595-2.195,23.975,23.975,0,0,0-7.213,1.041,25.21,25.21,0,0,0-6.45,3.144,45.138,45.138,0,0,0-6.332,5.223q-3.186,3.12-6.874,7.252-1.151-8.748-5.757-12.7T86.143,101.2a22.537,22.537,0,0,0-12.553,4.227A78.324,78.324,0,0,0,60.272,117.1V103.5H53.666v80.534h6.6V124q3.528-3.691,6.79-6.753a61.863,61.863,0,0,1,6.372-5.3,31.7,31.7,0,0,1,6.1-3.49,15.139,15.139,0,0,1,5.99-1.273,16.656,16.656,0,0,1,5.871.922,8.031,8.031,0,0,1,3.994,3.534,20.507,20.507,0,0,1,2.3,7.329,84.009,84.009,0,0,1,.733,12.4v52.665h6.593V124q4.229-4.309,7.562-7.486a55.186,55.186,0,0,1,6.3-5.263,23.759,23.759,0,0,1,5.87-3.074,19.854,19.854,0,0,1,6.374-1,15.361,15.361,0,0,1,5.409.85,7.33,7.33,0,0,1,3.763,3.492,22.43,22.43,0,0,1,2.225,7.641,95.74,95.74,0,0,1,.727,13.283v51.589h6.614Z" fill="#939598"/><path id="Subtraction_1" data-name="Subtraction 1" d="M-244-3116.755V-3223h31.5a63.139,63.139,0,0,1,17.125,2.054,28.444,28.444,0,0,1,11.642,6.162l0-.006a25.4,25.4,0,0,1,6.681,10.537,46.673,46.673,0,0,1,2.227,15.179,54.117,54.117,0,0,1-2.261,16.539,26.5,26.5,0,0,1-6.761,11.221,28.54,28.54,0,0,1-11.827,6.421,62.986,62.986,0,0,1-17.458,2.14H-229.8v36H-244Zm14.2-93.421v44.518h13.668c7.443,0,12.957-.734,16.389-2.182a14.46,14.46,0,0,0,7.6-7.06c1.6-3.234,2.411-7.9,2.411-13.856a30.189,30.189,0,0,0-1.382-9.633,15.909,15.909,0,0,0-4.145-6.641,17.62,17.62,0,0,0-7.483-3.859,44.047,44.047,0,0,0-11.4-1.286Z" transform="translate(421.166 3300.791)" fill="#2a534a" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/><path id="Path_15" data-name="Path 15" d="M117.279,209.816a2.551,2.551,0,0,1,2.707-2.386L243.948,211.4c1.423.076,2.486,1.828,2.379,3.914s-1.351,3.723-2.773,3.648L119.727,212.47a2.552,2.552,0,0,1-2.442-2.651" fill="#2a534a"/><path id="Path_16" data-name="Path 16" d="M148.061,219.986a1.729,1.729,0,0,1-1.9,1.5l-90.634.723a2.311,2.311,0,0,1,.039-4.543l90.621.791a1.728,1.728,0,0,1,1.872,1.53" fill="#939598"/></g></g></g></svg>
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

## Requirements

- PHP 8.0 or higher
- Composer
- Node.js (v16 or higher)
- Laravel 11
- MySQL or another supported database

## Setup

1. **Clone the Repository**

   ```bash
   git clone https://github.com/Mathiasjv/transport-units
   cd transport-units
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
   On local use just don't update it to create a local version

   ```dotenv
   DB_CONNECTION=sqlite
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
