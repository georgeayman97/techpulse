<?php

namespace App\Services\Project;

use App\Models\ProjectCategory;
use Illuminate\Support\Collection;

class GetProjectsService
{
    private ?Collection $projectCategories;

    public function __construct()
    {
    }

    /**
     * @return $this
     */
    public function execute(): self
    {
        $this->projectCategories = ProjectCategory::query()->with('deployedAndStagedProjects')->active()->get();
        return $this;
    }

    /**
     * @return Collection|null
     */
    public function getCategories(): ?Collection
    {
        return $this->projectCategories;
    }

}
