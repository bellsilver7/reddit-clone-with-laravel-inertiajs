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
            'slug' => $this->slug,
            'title' => $this->title,
            'url' => $this->url,
            'description' => $this->description,
            'username' => $this->user->username,
            'owner' => auth()->id() === $this->user_id,
            'comments' => CommentResource::collection($this->whenLoaded('comments')),
            'votes' => $this->votes,
            'postVotes' => $this->whenLoaded('postVotes'),
        ];
    }
}
