<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\ArticleTag
 *
 * @property int $id
 * @property int $article_id
 * @property int $tag_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleTag whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleTag whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ArticleTag whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ArticleTag extends Model
{
    protected $table = 'article_tag';
}
