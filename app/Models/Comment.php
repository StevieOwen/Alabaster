<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;
     protected $primaryKey = 'comment_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['comment_id','comment_text','publication','commentator'];

     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'commentator','user_id');
    }

     public function publication(): BelongsTo
    {
        return $this->belongsTo(Publication::class,'publication','pub_id');
    }
}
