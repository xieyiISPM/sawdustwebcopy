# Git clone set up
1. Clone the project to your C:\xampp\htdocs\
2. Go to the folder application using cd command on your cmd or terminal
3. Run *composer install* on your cmd or terminal
4. Copy .env.example file to .env on the root folder. You can type *copy .env.example .env* if using command prompt Windows or *cp .env.example .env* if using terminal, Ubuntu

(Step 5-7) can be skipped if we dont have database setup.
5. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration. 
6. By default, the username is root and you can leave the password field empty. (This is for Xampp) 
7. By default, the username is root and password is also root. (This is for Lamp)

8. Run *php artisan key:generate*
9. Run *php artisan migrate* ( I get exception at this step, but it seems ok)
11. go to C:\xampp\apache\conf\extra\httpd-vhosts.conf
 add: 
 '''
 <VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host2.example.com
    DocumentRoot "C:/xampp/htdocs/sawdustdev/public"
    ##ServerName dummy-host2.example.com
    ##ErrorLog "logs/dummy-host2.example.com-error.log"
    ##CustomLog "logs/dummy-host2.example.com-access.log" common
</VirtualHost>

'''
10 Restart XAMPP apache server inside XAMPP  (or Run php artisan serve)
11. Go to localhost:80
