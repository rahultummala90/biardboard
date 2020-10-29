<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
    public function UserCreateProject()
    {
        $this->withoutExceptionHandling();

        $attributes = [
            'title' => 'Test',
            'description' => 'Some Description'
        ];
        $this->post('/projects', $attributes);

        // assert that the database has this table with attributes
        $this->assertDatabaseHas('projects', $attributes);

    }
}
