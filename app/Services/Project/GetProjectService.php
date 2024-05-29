<?php

namespace App\Services\Project;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class GetProjectService
{
    private ?Model $project;
    private string $slug;

    public function __construct()
    {
    }

    /**
     * @return $this
     */
    public function execute(): self
    {
        $this->project = Project::query()->where('slug', $this->slug)
            ->first();
        return $this;
    }

    /**
     * @return Model|null
     */
    public function getProject(): ?Model
    {
        return $this->project;
    }

    /**
     * @param string $slug
     * @return GetProjectService
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

}
