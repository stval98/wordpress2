Instructions
=
**How to install PHP & Composer**
-
+ Windows
    1. Install Visual C++ Redistributable for Visual Studio 2015
    2. Download PHP7
    3. Expand zip file to file path `C:\PHP7`
    4. In `C:\PHP7` folder, rename php.ini-development to php.ini
    5. Open php.ini file in text editor
        * Change memory_limit from 128M to 1G
        * Uncomment:
            * `;extension_dir = "ext"`
            * `;extension=php_gd2`
            * `;extension=php_curl`
            * `;extension=php_mbstring`
            * `;extension=php_openssl`
            * `;extension=php_pdo_mysql`
            * `;extension=php_pdo_sqlite`
            * `;extension=php_sockets`
    6. Add `C:\PHP7` to Windows system path:
        * >System Control Panel
        * >>Advanced System Settings
        * >>>Environment Variables...
        * >>>>Path row under 'System variables' and click 'Edit...'
        * >>>>>'New' and add the row `C:\PHP7`
        * Click OK 3 times and close out System Control Panel
    7. Open terminal emulator and type in php -v to verify PHP is working
    8. Download Composer
    9. Allow installer to make changes to php.ini file
    10. Close terminal window and open a new one
    11. Run composer command 
+ MacOS
    1. Install latest PHP with Homebrew
    2. Remove the old PHP tap: `$ brew untap homebrew/php`
    3. Cleanup old installs (not only PHP though) and dead symlinks: `$ brew prune && brew cleanup`
    4. Update brew itself and all formulae: `$ brew update`
    5. Let brew run internal checks to see whether everything is fine: `$ brew doctor`
    6. This command now will install the latest PHP available (7.2.4_1): `$ brew install php`
    7. Download Composer
    8. Allow installer to make changes to `php.ini` file
    9. Close terminal window and open a new one
    10. Run composer command 
    
**How to install MySQL**
-
1. Download MySQL 
    MacOS : https://dev.mysql.com/downloads/file/?id=484914
    Windows : https://dev.mysql.com/downloads/installer/
2. Once downloaded begin installation process
3. When asked about password preferences select 'Legacy' 


**How to install Wordpress**
-
1. Make sure wordpress directory is in PhpstormProjects folder
2. Set up database in Phpstorm
    + Set up SQL
        + >Database
        + >>\+ Data Source
        + >>>MySQL
    + Use the following MySQL commands
        + `CREATE DATABASE <db_name>`
        + `CREATE USER '<user_name>'@'localhost' IDENTIFIED BY '<password>';`
        + `GRANT ALL PRIVILEGES ON <db_name>.* TO '<user_name>'@'localhost';`
        + `FLUSH PRIVILEGES;`
        
    + If that doesn't work:
        + `CREATE DATABASE <db_name>;`
        + `CREATE USER '<user_name>'@'localhost' IDENTIFIED WITH mysql_native_password BY ‘<password>’;`
        + `GRANT ALL PRIVILEGES ON <db_name>.* TO '<user_name>'@'localhost';`
        + `FLUSH PRIVILEGES;` 
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
        + Uncomment `extension=php_mysqli.dll` in `php.ini` file
7. Select language
8. Fill out website sign-up form
    + If page does not load:
        + In php.ini file, change max execution to 90; `max_execution_time = 90`
9. Login


**How to collaborate using Git & PHPStorm**
-
1. Create a repository on GitHub.com
    + Click the '+' drop down menu in the upper right hand corner
    + Select 'New Repository' from the drop down menu
    + Name your repository
    *Options*
        + Toggle Public/Private
        + Toggle README
        + Toggle .gitignore using 'Node' or 'Composer'
            //To ignore files simply add the file name to your .gitignore
        + Toggle license
2. Copy the HTTPS URL provided by GitHub that links to your repository
3. Start up PHPStorm
4. Select 'Check out from Version Control' from the start up menu
5. Select 'git' from the drop down menu
6. Paste the repository link into the 'URL' input form
    + Test connection
    + Adjust the root of the project being created 
7. Select 'Clone' to download a version of your repository to your local machine


**Commits & Pushing**

1. After completing work on your local machine you can push your work back up to your repository
    + When adding a new file locally PHPStorm will ask if you want to add this work to Git
            Select Yes
2. Select the 'VCS' tab in PHPStorm
3. Select Commit
    + Here you can adjust what pages are being committed
    + Note: add any pages dealing with local configurations to the .gitignore file
    + Add a useful 'Commit Message' to better track changes and keep your team up to date
    + Uncheck 'Perform Code Analysis' and 'Check TODO'
    + Click the 'Commit' button to commit your changes
4. Select the 'VCS' tab in PHPStorm
5. Hover over 'Git' to get additional features
6. Select 'Push'
    + Take note of which Branch you are pushing to
    + This step could lead to you losing/breaking project so BE CAREFUL
    
    
**Branches** 

  1. Create a Branch
    + In the lower right hand corner of PHPStorm there is a tab with "Git: master"
            //Master being the current branch 
    + Click the tab and select 'New Branch'
    + Name your branch and select 'Okay'
    + This creates another version of your project, meaning you can have a stable version, usually labeled Master, 
        and make changes without worrying about breaking your working program
  2. Merging Branches
    + Select the 'Master' branch from the lower right hand corner
    + Select the 'Git: master' tab again
    + Hover over the branch that you want to merge into Master 
    + Select 'Merge into Current'

**How to Export a MySQL database**
-

1. Run command line terminal as administrator
2. Change directory to MySQL Server bin file
    - For example: 
        * `cd C:\Program Files\MySQL\MySQL Server 8.0\bin`
3. Run mysqldump program: `mysqldump.exe`
4. Run mysqldump command
    * `mysqldump -u <username> -p <db_name> > <file_name>.sql`
    * **NOTE:** If `mysqldump.exe` or `mysqldump` commands don't work, use `.\mysqldump.exe` and `.\mysqldump` instead
5. Enter password when prompted
6. Add and commit file to remote repository
7. Push to master branch

**How to Import a MySQL database**
-

1. Pull changes from remote repository to local repository
2. Run command line terminal as administrator
3. Change directory to MySQL Server bin file
    - For example: 
        * `cd C:\Program Files\MySQL\MySQL Server 8.0\bin`
4. Run mysql program
5. Run mysql command
    * `mysql -u <username> -p <db_name> < <file_name>.sql`
6. Enter password when prompted
