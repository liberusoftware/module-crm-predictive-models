<?php

declare(strict_types=1);

namespace Liberu\CRM\PredictiveModels\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $team_id
 */
final class Prediction extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_predictive_predictions';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['score' => 'float', 'explanation' => 'array', 'features' => 'array', 'predicted_at' => 'datetime'];
    }
}
