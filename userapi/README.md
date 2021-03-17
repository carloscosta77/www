## User API

The API was developed on Laravel framework and for data persistence I used postgres.


## Set up and test

Run migrations to create users table

<pre>php artisan migrate</pre>

Execute tests

<pre>vendor/bin/phpunit</pre>

## API endpoints

The API has the following endpoints:

<p>GET api/users - List Users</p>
<p>GET api/users/{id} - View User</p>
<p>POST api/users - Create User</p>
<p>PUT api/users/{id} - Update User</p>
<p>DELETE api/users/{id} - Delete User</p>
    
## API structure

### User Model

<p>The User Model is located in app\Models\User.php and for this purpose works "out of the box" just by extending Laravel's Eloquent Model.
    It was only necessary to define the fields that are bulk updated to allow to create or update an user by passing an array with all the values to store.</p>
    
### User Controller

<p>The User Controller is located in app\Http\Controllers\UserController.php and has a method for each API's endpoint.
    Laravel's middleware insures that index() and show() method's responses are converted to JSON.
    
### Routes

Routes defined in routes/api.php map endpoints with methods from user controller

### Tests

Tests are defined in testes/UserTest.php

The tests were designed to run on a empty users's table to ensure that the expected IDs are created. It has a test for each method from UserController.




    
    

Seed db with random data

<pre>php artisan db:seed --class=UsersTableSeeder</pre>


