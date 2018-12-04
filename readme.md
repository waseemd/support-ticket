# Support Ticket

A support ticket application built using the Laravel framework.

## Getting Started

To use this application you need to download composer and nodejs and have them installed on your machine.
You can find these applications at https://getcomposer.org/ and https://nodejs.org/en/ respectively.
Once you have these installed, download this repository to your machine and unzip the entire directory.
Once you have done this, right-click and say click use composer here.
then type composer install + enter
This will install all the required composer files
Once this is complete you may run npm install, to install all the nodejs files required

## Setting Up
Copy .env.example to .env 
cp .env.example .env

Setup your database configuration in your env file, as well as your smtp details (I used mailtrap) then go to command prompt on your project directory and run

```php artisan migrate```

Once the database is setup and migrations are complete, run

```php artisan serve```

and visit [http://localhost:8000/](http://localhost:8000/) to see the application in action.

