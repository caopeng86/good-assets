<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProjectsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_view_all_projects()
    {
        $project = factory('App\Models\Project')->create();

        $this->get('/projects')
            ->assertSee($project->title);
    }

    /** @test */
    public function a_user_can_view_project()
    {
        $project = factory('App\Models\Project')->create();
        // dd($project->title);
        $this->get($project->path())
            ->assertSee($project->title);
    }
}
