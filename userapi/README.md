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
    

Seed db with random data

<pre>php artisan db:seed --class=UsersTableSeeder</pre>


