<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    /** @use HasFactory<\Database\Factories\ImageFactory> */
    use HasFactory;
    protected $primaryKey = 'img_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['img_id','img','publication'];
    
     public function publication(): BelongsTo
    {
        return $this->belongsTo(Publication::class);
    }
}
