<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use \App\Models\User;

class UserTest extends TestCase
{
    
    public function testsUsersAreCreatedCorrectly()
    {
        $payload = [
            'name' => 'Lorem',
            'email' => 'Ipsum',
            'birthday' => '2021-03-17',
            'gender' => 'm',
        ];

        $this->json('POST', '/api/users', $payload)
            ->assertStatus(201)
            ->assertJson(['id' => 1, 'name' => 'Lorem', 'email' => 'Ipsum', 'birthday' => '2021-03-17', 'gender' => 'm']);
    }

    public function testsUsersAreUpdatedCorrectly()
    {
        $user = \App\Models\User::factory()->create([
            'name' => 'name1',
            'email' => 'email1',
            'birthday' => '2021-03-16',
            'gender' => 'f',
        ]);

        $payload = [
            'name' => 'Lorem',
            'email' => 'Ipsum',
            'birthday' => '2021-03-17',
            'gender' => 'm',
        ];

        $response = $this->json('PUT', '/api/users/' . $user->id, $payload)
            ->assertStatus(200)
            ->assertJson([ 
                'id' => 1, 
                'name' => 'Lorem',
                'email' => 'Ipsum',
                'birthday' => '2021-03-17',
                'gender' => 'm',
            ]);
    }

    public function testsUsersAreDeletedCorrectly()
    {
        $user = \App\Models\User::factory()->create([
            'name' => 'name1',
            'email' => 'email1',
            'birthday' => '2021-03-16',
            'gender' => 'f',
        ]);

        $this->json('DELETE', '/api/users/' . $user->id, [])
            ->assertStatus(204);
    }

    public function testsUsersAreListedCorrectly()
    {
        User::factory()->create([
            'name' => 'name1',
            'email' => 'email1',
            'birthday' => '2021-03-16',
            'gender' => 'f',
        ]);

        User::factory()->create([
            'name' => 'Lorem',
            'email' => 'Ipsum',
            'birthday' => '2021-03-17',
            'gender' => 'm',
        ]);


        $response = $this->json('GET', '/api/users', [])
            ->assertStatus(200)
            ->assertJson([
                [ 'name' => 'name1', 'email' => 'email1' ],
                [ 'name' => 'Lorem', 'email' => 'Ipsum' ]
            ])
            ->assertJsonStructure([
                '*' => ['id', 'name', 'email', 'birthday', 'gender', 'created_at', 'updated_at'],
            ]);
    }
    
    
}
