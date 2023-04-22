<?php

namespace App\Http\Resources\Request;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RequestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'theme' => $this->theme,
            'text' => $this->text,
            'file_url' => $this->file_url,
            'user' => new UserResource(User::with('user')->findOrFail($this->user_id)),
            'created_at' => $this->created_at
        ];
    }
}
