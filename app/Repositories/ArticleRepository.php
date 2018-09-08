<?php

namespace App\Repositories;

use App\Article;
use App\Category;

/**
 * Class ArticleRepository
 *
 * @package \App\Repositories
 */
class ArticleRepository
{
    /**
     * 根据 alias 获取文章列表
     *
     * @param $alias
     * @return \App\Article[]|\Illuminate\Database\Eloquent\Collection|mixed
     * @author ROVAST
     */
    public function getListByCategoryAlias($alias)
    {
        $category = Category::whereAlias($alias)->first();

        // 如果没有文章，则按照热度返回
        if (empty($category)) {
            return Article::orderByDesc('views')->paginate(config('pager.default'));
        }

        return $category->articles()->paginate(config('pager.default'));
    }
}