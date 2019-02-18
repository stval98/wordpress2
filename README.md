Instructions
=
**How to install PHP & Composer**
-
+ Windows
    1. Install Visual C++ Redistributable for Visual Studio 2015
    2. Download PHP7
    3. Expand zip file to file path C:\PHP7
    4. In C:\PHP7 folder, rename php.ini-development to php.ini
    5. Open php.ini file in text editor
        * Change memory_limit from 128M to 1G
        * Uncomment:
            * ;extension_dir = "ext"
            * ;extension=php_gd2
            * ;extension=php_curl
            * ;extension=php_mbstring
            * ;extension=php_openssl
            * ;extension=php_pdo_mysql
            * ;extension=php_pdo_sqlite
            * ;extension=php_sockets
    6. Add C:\PHP7 to Windows system path:
        * >System Control Panel
        * >>Advanced System Settings
        * >>>Environment Variables...
        * >>>>Path row under 'System variables' and click 'Edit...'
        * >>>>>'New' and add the row C:\PHP7
        * Click OK 3 times and close out System Control Panel
    7. Open terminal emulator and type in php -v to verify PHP is working
    8. Download Composer
    9. Allow installer to make changes to php.ini file
    10. Close terminal window and open a new one
    11. Run composer command 
+ MacOS
    1. Install latest PHP with Homebrew
    2. Remove the old PHP tap: $ brew untap homebrew/php
    3. Cleanup old installs (not only PHP though) and dead symlinks: $ brew prune && brew cleanup
    4. Update brew itself and all formulae: $ brew update
    5. Let brew run internal checks to see whether everything is fine: $ brew doctor
    6. This command now will install the latest PHP available (7.2.4_1): $ brew install php
    7. Download Composer
    8. Allow installer to make changes to php.ini file
    9. Close terminal window and open a new one
    10. Run composer command 
    
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
    + Make sure root is the wordpress directory file path
    + Click "Fix"
    + Make sure PHP language level and CLI interpreter match and are set to installed PHP version
    + Click apply
    + Execute the configuration
6. Open browser and go to localhost:8080
    + If you encounter errors:
        + Uncomment "extension=php_mysqli.dll" in php.ini file
7. Select language
8. Fill out website sign-up form
    + If page does not load:
        + In php.ini file, change max execution to 90; "max_execution_time = 90"
9. Login


**How to collaborate using Git**
-
1.