<?php

namespace Core\Answer\Controllers\API\V1;

use Core\Answer\Models\Answer as Model;
use Core\Answer\Requests\AnswerRequest as FormRequest;
use Core\Answer\Resources\AnswerResource as Resource;

class AnswerController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Init.
     *
     * @param  string  $resource
     */
    public function __construct(FormRequest $request, Model $model, $resource = Resource::class)
    {
        parent::__construct($request, $model, $resource);
    }
}
