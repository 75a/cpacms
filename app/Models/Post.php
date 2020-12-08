<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'slug',
        'category_id',
        'metatitle',
        'metadescription',
        'metaauthor',
        'logo_text',
        'logo_src',
        'menu_link_text',
        'menu_link_product_name',
        'menu_link_product_url',
        'featured_header',
        'featured_description',
        'featured_image_src',
        'featured_image_alt',
        'article_header',
        'article_text',
        'generator_header',
        'inputs',
        'call_to_action_header',
        'call_image1_src',
        'call_image1_alt',
        'call_image2_src',
        'call_image2_alt',
        'call_image3_src',
        'call_image3_alt',
        'connecting',
        'connected',
        'secondstep',
        'secondstepfinished',
        'thirdstep',
        'thirdsteperror',
        'thirdstepwaiting'
    ];

    public function path()
    {
        return route('post-manager.show', $this);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function conversions()
    {
        return $this->hasMany(Conversion::class);
    }


}
