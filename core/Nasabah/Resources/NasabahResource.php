<?php

namespace Core\Nasabah\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class NasabahResource extends Resource
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
            'id'   => $this->id,
            'nama' => $this->nama,
            'tempat_lahir' => $this->tempat_lahir,
            'tanggal_lahir' => $this->tanggal_lahir,
            'penghasilan' => $this->penghasilan,

            $this->mergeWhen($request->route()->getName() == 'api.v1.nasabahs.show', [

            ])
        ];
    }
}
