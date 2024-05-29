<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;

class Project extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    use HasUuids;
    use HasTags;
    protected $fillable = [
        'title_en',
        'title_ar',
        'title_sp',
        'title_sw',
        'sub_title_en',
        'sub_title_ar',
        'sub_title_sp',
        'sub_title_sw',
        'description_en',
        'description_ar',
        'description_sp',
        'description_sw',
        'url',
        'start_date',
        'delivery_date',
        'total_price',
        'total_paid',
        'total_left',
        'total_cost',
        'sales_commission',
        'category_id',
        'client_id',
        'slug',
        'status',
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(ProjectCategory::class,'category_id');
    }

    /**
     * @return BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class,'client_id');
    }
}
