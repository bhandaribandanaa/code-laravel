# code-laravel
**Install laravelon Microsoft Windows steps:**
   		Laravel utilizes Composer to manage its dependencies.So, before using Laravel	we should  make sure we have Composer installed on our machine	
1. Installation of composer: https://getcomposer.org/ visit the website to download composer and follow the installation process
2. To check of composer is installed or not :(for window)
	run command prompt type composer(if installed: detail information about composer will be visible in the console)
3. After the installation of composer:  command prompt or in powershell:( if you have locally install)
a. Provide the location of project to be installed
b. Type composer create-project --prefer-dist laravel/laravel (project name=>blog)
4. **To run the project**
	php artisan serve =>( This command will start a development server at http://localhost:8000)
    
**Detail about project**
1. Project consist of form which allow the users to submit the necessary information availabe in the form
2. If the form validation requirement is fullfilled then the user  information history is created  in csv files
3. created csv file ,Show all clients pulled in from the CSV as another page
