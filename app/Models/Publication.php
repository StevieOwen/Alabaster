<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Publication extends Model
{
    /** @use HasFactory<\Database\Factories\PublicationFactory> */
    use HasFactory;
    protected $primaryKey = 'pub_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable=[
        'pub_id',
        'pub_caption',
        'pub_category',
        'publisher',
        'pub_comment_num',
        'pub_like_num',
    ];

    public function user(): BelongsTo
    {
         return $this->belongsTo(User::class,"publisher","user_id");
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class,'publication',"pub_id")->latest();
    }

    public function image(): HasOne
    {
        return $this->hasOne(Image::class,'publication','pub_id');
    }

    public function likes()
    {
        return $this->hasMany(Like::class, 'pub_id', 'pub_id');
    }

    public function isLikedBy($userId)
    {
        if (!$userId) return false;
    return $this->likes()->where('user_id', $userId)->exists();
    }


}

