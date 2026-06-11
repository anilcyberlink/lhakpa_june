<?php

namespace App\Models\Inquiry;

use Illuminate\Database\Eloquent\Model;
use App\Models\Inquiry\FeedbackImage;


class FeedbackModel extends Model
{
    protected $table = 'feedbacks';
    protected $fillable = [
        // Section 01: About Your Trek
        'trip',
        'departure',
        'guide_name',
        'full_name',
        'nationality',

        // Section 02: Overall Satisfaction
        'overall',
        'guide',
        'porter',
        'accommodation',
        'recommend',
        'favourite',
        'improvement',

        // Section 03: The Guide & Staff
        'guide_professionalism',
        'guide_knowledge',
        'porter_support',
        'comments',

        // Section 04: Detailed Checklist
        'guide_qualities',
        'guide_qualities_other',
        'guide_score',

        // Section 05: Memorable Moments
        'story',

        // Section 06: Future Treks
        'newsletter',
        'email',
        'future_destinations',
        'future_destinations_other',
        'heard_about',
        'heard_about_other',
        'feedback_consent',

        'status'
    ];

    protected $casts = [
        'guide_qualities' => 'array',
        'future_destinations' => 'array',
        'departure' => 'date',
    ];
    public function images()
    {
        return $this->hasMany(FeedbackImage::class, 'feedback_id');
    }
}


