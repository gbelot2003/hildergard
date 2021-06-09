<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class UserTest extends TestCase
{

    use RefreshDatabase, WithFaker;

    /** @test */
    public function has_grades()
    {
        $user = User::factory()->create();
        $this->assertInstanceOf(Collection::class, $user->grades);
    }
}
