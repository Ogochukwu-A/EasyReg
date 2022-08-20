<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# EASY REGULATION

## Introduction 
Easy Regulatory web application is a digital platform that enables start-ups and developers of medical applications/software to gain market access to other countries. It aims at providing customers with the documents and guidance needed to meet regulatory requirements such that their products are certified for marketing in the European Union.

## Objectives:
To arm customers with tools and skills needed to demonstrate required compliance
To enable customers to track the progress of their applications
To successfully introduce customer solutions into the market. 
To create an interactive platform with autosuggestions and auto-generation of documents. 

## Description of all components and software modules/frameworks used to develop this web app
Framework: Laravel
Hardware: Microsoft windows computer
Software apps and online services: Xampp, Microsoft VS code.



### FRAMEWORK (Laravel)
Laravel is a web application development framework with an explicit and elegant syntax that makes the entire web development process swifter, easier, and more convenient for developers by tackling all the problems related to handling complex PHP code. Laravel helps to build modern full-stack web applications because of its progressive framework, is easily scalable, and provides a PHP web app that is wholly secured.  It is a server-based platform for managing data that divides the backend architecture of an application into logical parts using the Model-View-Controller (MVC) design pattern. The installation and creation of a Laravel application imported a set of code libraries/ folders with pre-programmed valuable functionalities such as an 
authentication tool, rooting tool, or HTML templates that allow users to build applications faster. Companies that specialize in IT, medicine, finance, travel, sales, entertainment, and other industries use it.


### Advantages 
1.	The Laravel framework helps the web application become more scalable and well-structured codebases.
2.	Saves time.
3.	Organizes and manages resources
4.	It prevents web attacks
5.  Popular framework
6.  Database access 


Laravel uses a dependence manager called “composer”. It identifies all the libraries your application or project depends on and manages them. All dependencies are listed in the source folder composer.json Also “Artisan” is the command-line interface used in Laravel. It contains commands used in building a web app. 
To develop a project using Laravel, your local machine should have PHP and Composer installed. 


### Setting up the Development Environment
1.	Install Visual Studio Code
        Visual Studio Code (https://code.visualstudio.com/)

2.	Install xampp (it will install a version of php and mysql)
        check the software version for your OS https://www.apachefriends.org/index.html

3.	Install Composer
        Download and run Composer-Setup.exe - it will install the latest composer version whenever it is executed. https://getcomposer.org/Composer-Setup.exe

4.	For a new Laravel project, create a directory anywhere on your computer. Then, to install Laravel,
move to the path where you 
        built the new directory and execute the following command there. #composer create-project laravel/laravel  medswd This will install Laravel framework (latest version).     

5.	To start Laravel execute this command #cd medswd, excute #php artisan migrate and #php artisan serve. Then, you can access your app via web 
        browser by using port 8000: http://127.0.0.1:8000/ 



## Xampp offers a suitable environment to test and validate projects using other server services. (MySQL, PHP, Apache, etc.).  
### Advantages of using Xampp
1.	It is free and easy to use and easily available for Windows, Linux, and Mac OS.
2.	User friendly
3.	It is an open-source software package that gives an easy installation experience.
4.	It handles various administrative responsibilities including verifying the status and security.
5.	It is basic and lightweight to construct a setup for development, testing, and deployment.
6.	It is time-saving and provides several solutions for managing configuration changes




## Visual Studio Code 
An effective source code editor that runs on Windows/ desktop, macOS, and Linux. 
It contains support for JavaScript, TypeScript, and Node.js built-in, as well as a robust ecosystem of extensions for additional languages and runtimes (including C++, C#, Java, Python, PHP, Go, and.NET).



## Step-by-step instructions to recreate your prototype

For the frontend of the web app, we used HTML, CSS,  bootstrap and javascript. In the resource folder, we have the views, where the frontend codes were created. And created the different pages like Homepage (resources\views\partials\_hero.blade.php), 
users (login/ registration), 

check.blade.php (this page displays when a client clicks on “submit check”, this form is displayed to submit a request to determine if your device complies with EU regulations. The name of the medical device is unique/ or a primary key.),

Clients Dashboard (\resources\views\partials\_search.blade.php) This is the page that shows up after the client logs into his account. 
The client is allowed to see other medical devices/ software names posted for marketing purposes but does not have access to it (the content). 
Laravel improves security by authenticating every user. From this page, he can access the template page, tools as well as post innovation, and the other pages 
available to him as a user. Any update the user makes on this page is transmitted over to the database.,

Template page (resources\views\listings\create.blade.php): This is the page where the client/user can post innovations, read, update, and delete 
any medical software document uploaded for evaluation/ consultation. Each client only has access to his own document thereby improving data protection and confidentiality of information. Our Easy Regulatory app conforms with the latest GDPR data protection laws and regulations.

The conditional.blade.php page which helps to submit a form to determine the class of medical device. etc.   These pages were routed for web interfaces. Here is where you can register web routes for your application. These routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group. All the logic is stored in the controller.


With the help of laravel which is a php framework, we connected the frontend to the backend. Create a database called "med-app",
set-up the environment .env and named the database = med-app. We migrate the database from laravel using php command "php artisan migrate" this causes the built-in php files to create useful tables in the database. We created tables called "listings" that recieves information from the form created in the (create.blade.php) and the checks table recieves information from the form created in the (check.blade.php) php file.

The web application sends data to a MySQL database that is hosted on Xampp. 
 The transmission of data from the web app to our database follows this step.
1.	Make sure the name of your database corresponds to the database name in the .env file in laravel.
2.	Open Xampp Control panel and start MySQL and Apache
3.  Open the folder where the project has been installed using your editor e.g.  VScode to be able to view the project. 
4.  Start the server using the command "php artisan serve" in your terminal.
5.  Go to the homepage 
6.	Login/ register into the Easy Regulatory system  
7.  Create an innovation, update, submit a request and delete an innovation
8.	Click on save or update.
9.	The data is transmitted to our MySQL database.   




- lecture by Prof. Dominik Böhler

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




