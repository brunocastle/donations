<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $title
 * @property string $description
 * @property int status
 * @property int request_type_id
 * @property int user_id
 * @property int organization_id
 * @property string created_at
 * @property string updated_at
 * @property string deleted_at
 */

class Request extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'status',
        'request_type_id',
        'user_id',
        'organization_id',
    ];

    public function donations(): HasMany
    {
        return $this->hasMany(Donation::class);
    }

    public function requestCategory(): BelongsTo
    {
        return $this->belongsTo(RequestCategory::class);
    }

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
