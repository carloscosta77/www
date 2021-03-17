## User API

The API was developed on Laravel framework and for data persistence I used postgres.


## Set up and test

Run migrations to create users table

<pre>php artisan migrate</pre>

Execute tests

<pre>vendor/bin/phpunit</pre>

## API endpoints

The API has the following endpoints:

GET api/users - List Users
GET api/users/{id} - View User
POST api/users - Create User
PUT api/users/{id} - Update User
DELETE api/users/{id} - Delete User
    

Seed db with random data

<pre>php artisan db:seed --class=UsersTableSeeder</pre>


