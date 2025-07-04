<?php

namespace App\Models\Concerns;

use Spatie\Activitylog\LogOptions;

trait LogsActivity
{
    use \Spatie\Activitylog\Traits\LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logFillable()
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }
}
