<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Scan extends Model
{
    protected $guarded = ['id'];

    public function packages(): BelongsToMany
    {
        return $this->belongsToMany(Package::class)->withPivot('package_version');
    }

    public function vulnerabilities(): BelongsToMany
    {
        return $this->belongsToMany(Vulnerability::class);
    }

    public function project_client(): BelongsTo
    {
        return $this->belongsTo(ProjectClient::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
