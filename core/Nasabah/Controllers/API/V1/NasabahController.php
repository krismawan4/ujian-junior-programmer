<?php

namespace Core\Nasabah\Controllers\API\V1;

use Core\Nasabah\Requests\NasabahRequest as FormRequest;
use Core\Nasabah\Models\Nasabah as Model;
use Core\Nasabah\Resources\NasabahResource as Resource;

class NasabahController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Init.
     * @param FormRequest $request
     * @param Model       $model
     * @param string      $resource
     */
    public function __construct(FormRequest $request, Model $model, $resource = Resource::class)
    {
        parent::__construct($request, $model, $resource);
    }
}
