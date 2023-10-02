<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ScheduleResource extends JsonResource
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
            'schedule_date' => $this->schedule_date,
            'schedule_type' => $this->schedule_type,
            'subject' => new SubjectResource($this->whenLoaded('subject')),
            'student' => new UserResource($this->whenLoaded('student')),
        ];
    }
}
