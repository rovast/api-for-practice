<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class CategoryController extends ApiController
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index(Request $request)
    {
        $list = $this->category->all();
        $data = CategoryResource::collection($list);
        
        return $this->responseSuccess($data);
    }
}
