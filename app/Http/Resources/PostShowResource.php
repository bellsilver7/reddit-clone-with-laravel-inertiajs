<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'username' => $this->user->username,
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'slug' => $this->slug,
            'owner' => auth()->id() === $this->user_id,
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
        ];
    }
}
