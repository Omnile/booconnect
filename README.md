# booconnect

This will be the central repo for the Booconnect App.

## Setup
1. For now, clone this repo on your local machine and copy the .env.example to .env

2. Generate the application key.
  ```bash
    php artisan make:key
  ```
  
3. Run the database migration command.
  ```bash
    php artisan migrate
  ```
  
4. Compile the frontend assets:
  Note: To compile the frontend assets, first ensure that npm is installed on your local machine. I'll assume you have it installed.
  
  Install dependencies using NPM
  ```bash
    npm install;
  ```
  
  Compile assets
  ```bash
    npm run dev;
  ```

