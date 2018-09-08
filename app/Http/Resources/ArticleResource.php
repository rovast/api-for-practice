<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'author'   => $this->user->name,
            'time'     => $this->updated_at->diffForHumans(),
            'category' => new CategoryResource($this->category),
            'tags'     => TagResource::collection($this->tags),
            'title'    => $this->title,
            'cover'    => $this->cover,
            'views'    => $this->views,
            'stars'    => $this->stars,
        ];
    }
}
