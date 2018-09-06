<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ArticleResource;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class ArticleController extends ApiController
{
    protected $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function index(Request $request)
    {
        // 默认获取的是推荐的
        $categoryAlias = $request->input('category_alias', 'recommend');

        $list = $this->articleRepository->getListByCategoryAlias($categoryAlias);
        $data = ArticleResource::collection($list);

        return $this->responseSuccess($data);
    }
}
