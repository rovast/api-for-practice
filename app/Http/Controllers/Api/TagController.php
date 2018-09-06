<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\TagResource;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends ApiController
{
    protected $tag;

    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function index(Request $request)
    {
        $data = TagResource::collection($this->tag->all());

        return $this->responseSuccess($data);
    }
}
