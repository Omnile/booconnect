# booconnect

This will be the central repo for the Booconnect App.

## Setup

For this setup directions, I'll asume that you have NodeJS and PHP 7.* already setup and configured.

1. For now, clone this repo on your local machine and copy the .env.example to .env

2. Generate the application key.
  ```bash
    php artisan key:generate
  ```
  
3. Setup the database in the '.env' file.
  Replace the database configuration data with your local database specific configuration data.
  ```php
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=homestead
      DB_USERNAME=homestead
      DB_PASSWORD=secret
  ```

4. Run the database migration command.
  ```bash
    php artisan migrate
  ```
  
5. Compile the frontend assets:
  Note: To compile the frontend assets, first ensure that npm is installed on your local machine. I'll assume you have it installed.
  
  Install dependencies using NPM
  ```bash
    npm install;
  ```
  
  Compile assets
  ```bash
    npm run dev;
  ```

