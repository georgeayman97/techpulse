<?php

namespace App\Services;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class GetHomeService
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
        $this->projectCategories = ProjectCategory::query()->with('deployedProjects')->active()->get();
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
