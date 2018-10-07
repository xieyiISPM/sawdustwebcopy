# Git clone set up
1. Clone the project to your C:\xampp\htdocs\
2. Go to the folder application using cd command on your cmd or terminal
3. Run `composer install` on your cmd or terminal
4. Copy .env.example file to .env on the root folder. You can type `copy .env.example .env` if using command prompt Windows or `cp .env.example .env` if using terminal, Ubuntu.
5. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration. 
6. By default, the username is root and you can leave the password field empty (This is for Xampp). 
7. By default, the username is root and password is also root. (This is for Lamp)

8. Run `php artisan key:generate`
9. Run `php artisan migrate`
10. go to C:\xampp\apache\conf\extra\httpd-vhosts.conf
 
 ...add: 
 ```
 <VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host2.example.com
    DocumentRoot "C:/xampp/htdocs/sawdustdev/public"
    ##ServerName dummy-host2.example.com
    ##ErrorLog "logs/dummy-host2.example.com-error.log"
    ##CustomLog "logs/dummy-host2.example.com-access.log" common
</VirtualHost>

```
11. Restart XAMPP apache server inside XAMPP  (or Run php artisan serve)
12. Go to localhost:80


# Heroku Setup
1. Create a Heroku account
2. Under personal click add New tab on the top-left then `create a new app`
    - The app name has to be unique
3. In the next page `Deploy` tab, choose deployment method as `GitHub`
4. add our Github repo , `Deploy`
5. In the project root folder add  new file `Procfile` within a line below:
    ```
    web: vendor/bin/heroku-php-apache2 public/
    ```
 6. extra note: if we want to see exception, under config->app.php change to line below:
 ```
 'debug' => env('APP_DEBUG', true),
 ```
 7. delete content inside .gitignore since .env is in there. ( I am not sure if others matter)
 
    

