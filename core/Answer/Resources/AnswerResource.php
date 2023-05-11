<?php

namespace Core\Answer\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class AnswerResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,

            $this->mergeWhen($request->route()->getName() == 'api.v1.answers.show', [

            ]),
        ];
    }
}
