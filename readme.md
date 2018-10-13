Installation and Configuration steps for   Laravel Framework
1.	Download and Install Xampp or wamp  ( I prefer Xampp)
2.	Download and Install Composer
3.	Download and Intsall Git (Git bash)
4.	For editor , I would recommend  to download and install “ Visual Studio Code” because  it consist of terminal and editor in same screen
5.	In Viusal studio Code by default Terminal consist of powershell we need to change it to bash
•	For that Go to File->Preferences->Settings->More Options -> OpenSettings.json
•	In the User Settings type and save
      {

      “terminal.integrated.shell.windows”:  “C:\\Program Files\\Git\\bash.exe”
}  
•	After this Restart Visaul Studio Code


6.	In visual Studio command , go to htdocs of xampp
     Type and enter =>   cd ../../xampp/htdocs
       
    Type and enter => composer create-project laravel/laravel news24

7.	Now go to and open  C:/xampp/apache/conf/extra/httpd-vhosts.conf
         
Type and save
                               
<VirtualHost *:80>
   
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
   
</VirtualHost>

<VirtualHost *:80>
   
    DocumentRoot "C:/xampp/htdocs/news24/public"
    ServerName news24.dev
   
</VirtualHost>






8.	Now Open “Notepad” as an administrator ( Remember  you should open it as administrator)
Go to and open   C:\Windows\System32\drivers\etc\hosts.file

Note:Change to “View all files “ at bottom-right to show all files and open hosts.file


Type and save

127.0.0.1 localhost
127.0.0.1 news24.dev

9.	Restart Apache and go to browser and In url type  news24.dev



•	To create a controller ,type and enter
php artisan make:controller PagesController
•	To create a controller for CRUD , type and enter
php artisan make:controller NewsController –resource
•	To create a model , type and enter
php artisan make:model News -m

•	for database creation and migration , type and enter
php artisan migrate 
        






Project Description

Controller Section 

PagesController : For routing of pages

CategoriesController: Controller for CRUD operation of Category Module  ( There is no Update function Though CRD only)

NewsController: Controller for CRUD Operation of News Module 

 
 View Section
categories/create_category.blade.php : Form for registering new category

categories/view_category.blade.php: Show lists of categories with option of delete which can be further accessed to show the news of that particular category


news/create_news.blade.php : Form for registering new News

news/edit_news.blade.php : Form for editing existing News

news/view_list_news.blade.php : shows list of news which can further access to show detailed news

news/view_news.blade.php : shows detailed news with options of edit and delete



































