<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // ...

    /**
     * Get the category that owns the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // ...

    /**
     * Get the total number of posts belonging to a specific category.
     *
     * @param int $categoryId
     * @return int
     */
    public static function getTotalPostsByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }
    use SoftDeletes;

    // ...

    /**
     * Get all soft deleted posts.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }
}
