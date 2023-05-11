<?php

namespace Core\Answer\Tests\Feature;

use Core\Answer\Models\Answer as Model;
use Core\Base\Tests\ApiTestCase;

class AnswerTest extends ApiTestCase
{
    /**
     * setting up
     *
     * @throws \ReflectionException
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->base_url = $this->getApiBaseUrl().'answers/';
        $this->model = new Model();
        $this->data = $this->model::factory()->make()->toArray();
        $this->json = $this->getJsonStructure();
        $this->json['data'] = ['id'];

        foreach ($this->data as $key => $value) {
            $this->json['data'][] = $key;
        }
    }
}
