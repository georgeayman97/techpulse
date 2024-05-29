<?php

namespace App\Models;

use App\Enum\ProjectStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProjectCategory extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'name_en',
        'name_ar',
        'name_sp',
        'name_sw',
        'status',
        'slug',
    ];

    /**
     * @param $query
     * @return Builder
     */
    public function scopeActive($query): Builder
    {
        return $query->where('status', true);
    }

    /**
     * @return HasMany
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'category_id');
    }

    /**
     * @return HasMany
     */
    public function deployedProjects(): HasMany
    {
        return $this->hasMany(Project::class, 'category_id')->where('status', ProjectStatus::Deployed);
    }

    /**
     * @return HasMany
     */
    public function deployedAndStagedProjects(): HasMany
    {
        return $this->hasMany(Project::class, 'category_id')->where('status', ProjectStatus::Deployed)
            ->orWhere('status', ProjectStatus::Stage);
    }
}
