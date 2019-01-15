# code-laravel
**Install laravelon Microsoft Windows steps:**
   		Laravel utilizes Composer to manage its dependencies.So, before using Laravel	we should  make sure you have Composer installed on your machine	
1. installation of composer: https://getcomposer.org/ 	visit the website and download 	
2. to check of composer is installed or not :(for window)
	run command prompt type composer(if installed will be visible in the console)
3. After the installation of composer in command prompt or in powershell:(locally install)
a. provide the location of project to be installed
b. type composer create-project --prefer-dist laravel/laravel (project name=>blog)
4. to run the project
	php artisan serve =>( This command will start a development server at http://localhost:8000)
**detail of project**
1. Project consist of form which allow the users to submit the necessary information availabe in the form
2. If the form validation requirement is fullfilled then the user  information history is created  in csv files
3. created csv file ,Show all clients pulled in from the CSV as another page



