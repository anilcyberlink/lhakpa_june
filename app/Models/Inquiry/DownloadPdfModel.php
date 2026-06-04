<?php

namespace App\Models\Inquiry;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadPdfModel extends Model
{
    use HasFactory;

    protected $table = 'user_pdf';
    protected $fillable = ['trip_title','user_id'];
    
}
