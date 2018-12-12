<?php
/**
 * Created by PhpStorm.
 * User: aliuwahab
 * Date: 12/12/2018
 * Time: 2:13 PM
 */

namespace Tests\Feature;


use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserModelTest extends TestCase
{

    use RefreshDatabase;

    /** @test */

    public function can_create_a_user()
    {
       factory(User::class, 1)->create([
            'name' => 'Aliu'
        ]);

        $user = User::findOrFail(1);

        $this->assertEquals('Aliu', $user->name);



    }

}
