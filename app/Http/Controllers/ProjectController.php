<?php

namespace App\Http\Controllers;

use App\Services\Project\GetProjectService;
use App\Services\Project\GetProjectsService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProjectController extends Controller
{
    private string $view_path = 'pages.';

    public function __construct(
        private readonly GetProjectsService $projectsService,
        private readonly GetProjectService $projectService,
    ) {
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $projectsService = $this->projectsService->execute();

        $view_data = [
            'categories' => $projectsService->getCategories(),
        ];

        return view($this->view_path . 'project', $view_data);
    }

    /**
     * @param string $slug
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function show(string $slug): \Illuminate\Foundation\Application|View|Factory|Application
    {
        $projectService = $this->projectService->setSlug($slug)->execute();

        $view_data = [
            'project' => $projectService->getProject(),
        ];

        return view($this->view_path . 'inner', $view_data);
    }
}
