# Timecard project!

Requirements:
- user should be to log in to the tool.
- once logged in users should be able punch in/punch out their log in/log out time.
- user should be able to see a log of their punch in and punch out by date.

## Starting project:

Every time we start a project we follow this routine:
- Create a new project using composer by running this command:
    composer create-project laravel/laravel project-name

-  Once installation is completed run localserver:
    php artisan serve

- configure .env configuration file to use the appropiate database:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=

- create your database and run your app's database migrations:
    php astisan migrate

- if you are planning use Laravel's authentication features like login, run in your terminal the installation of your chosen stack:
    composer require laravel/breeze --dev

    php artisan breeze: install blade

- start the Vite development server to automatically recompile your CSS and refresh the browser:
    npm run dev

---
# Punch in functionality and DB connection

This day we work on the punch in functionality and the Database connection and migration.

some downsides had been experienced and still working on it:
+ Everything is find with DB connection
+ The issue became when updating the information on the dashboard
+ the punch in button isn't turning into punch out
---
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
#   t i m e c a r d 
 
 