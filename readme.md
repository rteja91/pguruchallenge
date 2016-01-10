## ListEstate PropertyGuru Challenge

## Installation requirements
    Mysql 5.6
    Node
    Gulp 
    

## Framework Used

    Laravel 5.1

## Directory Structure

├── app
│   ├── Console
│   ├── Events
│   ├── Exceptions
│   ├── Http
│   ├── Jobs
│   ├── Listeners
│   ├── Policies
│   └── Providers
├── bootstrap
│   └── cache
├── config
├── database
│   ├── factories
│   ├── migrations
│   └── seeds
├── node_modules
│   ├── bootstrap-sass
│   ├── gulp
│   ├── laravel-elixir
│   └── materialize-css
├── public
│   ├── css
│   ├── font
│   └── js
├── resources
│   ├── assets
│   ├── lang
│   └── views
├── storage
│   ├── app
│   ├── framework
│   └── logs
├── tests
└── vendor
    ├── bin
    ├── classpreloader
    ├── composer
    ├── danielstjules
    ├── dnoegel
    ├── doctrine
    ├── fzaninotto
    ├── hamcrest
    ├── jakub-onderka
    ├── jeremeamia
    ├── laravel
    ├── league
    ├── mockery
    ├── monolog
    ├── mtdowling
    ├── nesbot
    ├── nikic
    ├── paragonie
    ├── phpdocumentor
    ├── phpspec
    ├── phpunit
    ├── psr
    ├── psy
    ├── sebastian
    ├── swiftmailer
    ├── symfony
    └── vlucas

## Database settings

    You need to edit .env file settings
    DB_HOST=localhost
    DB_DATABASE=listestate
    DB_USERNAME=listestate
    DB_PASSWORD=d3v123
    
## Database Installation

    Need to run command " php artisan migrate " to create tables.
    Need to run commanf " php artisan db:seed " to create the seed data.

## known issues

    search working only one time. 
    
    
## operational procedure 

    Clicking on individual property will set the data beside in property details page
    
## code explaination 

    root folder of the application is 
    
    app/public
    
   
    routes are present 
        app/http/routes
    controllers
        app/http/controllers/estate
    model
        app/estate.php
        
    views
        app/resource/views/home.blade.php - for main page
        app/resource/views/proplist.blade.php - for proplist
        app/resource/views/propdetails.blade.php - for propdetails
        
        
    style
        sass is used to compile css gulp will compile the resources/assests/scss/app.scss and materialize.scss to public/css/app.css
       
     javascript 
        app/public/js
        
##need to give wirtable permissions for 

app/storage/framework
app/storage/logs

##DEMO URL would be 

url[http://158.69.216.161/listestate]

##github download url

url[https://github.com/rteja91/pguruchallenge/archive/master.zip]
