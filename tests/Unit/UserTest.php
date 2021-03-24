<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_example()
    {
        $users = User::factory()->count(3)->create();
        $user = User::find(1);
        $user->name = "AHN";
        dd($user);
        //$user = User::find(1);
        $user->save();
    }
}
