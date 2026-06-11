<?php

namespace App\Models\Inquiry;

use Illuminate\Database\Eloquent\Model;
use App\Models\Inquiry\FeedbackModel;

class FeedbackImage extends Model
{
    protected $table = 'feedback_images';
    protected $fillable = ['feedback_id', 'filename', 'type'];

    public function feedback()
    {
        return $this->belongsTo(FeedbackModel::class);
    }
}


