Instructions
=
**How to install PHP**
-

**How to install MySQL**
-

**How to install Wordpress**
-
1. Make sure wordpress directory is in PhpstormProjects folder
2. Set up database in Phpstorm
    + Set up SQL
        + >Database
        + >>\+ Data Source
        + >>>MySQL
    + Use the following MySQL commands
        + CREATE DATABASE <db_name>
        + CREATE USER '<user_name>'@'localhost' IDENTIFIED BY '<password>';
        + GRANT ALL PRIVILEGES ON <db_name>.* TO '<user_name>'@'localhost';
        + FLUSH PRIVILEGES; 
        
    + If that doesn't work:
        + CREATE DATABASE <db_name>;
        + CREATE USER '<user_name>'@'localhost' IDENTIFIED WITH mysql_native_password BY ‘<password>’;;
        + GRANT ALL PRIVILEGES ON <db_name>.* TO '<user_name>'@'localhost';
        + FLUSH PRIVILEGES; 
    + Execute each line one by one
3. Create copy of wp-config-sample.php file and rename it wp-config.php
4. Change all placeholder information in wp-config.php to correct database name, username, and password
5. Run configuration
    + >Run
    + >>Edit Configurations...
    + >>> \+ PHP Built In Web
    + Set host to localhost or 127.0.0.1
    + Set port to 8080
    + Make sure root is the wordpress directory
    + Click "Fix"
    + Make sure configuration is set to the correct version of PHP installed
    + Click apply
    + Execute the configuration
6. Open browser and go to localhost:8080
    + If you encounter errors:
        + Uncomment "extension=php_mysqli.dll" in php.ini file
7. Select language
8. Fill out website sign-up form
    + If page does not load:
        + In php.ini file, change max execution to 90; "max_execution_time = 90"


**How to collaborate using Git**
-
1.