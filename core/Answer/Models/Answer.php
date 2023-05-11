<?php

namespace Core\Answer\Models;

use Core\Base\Models\Base;
use Core\Question\Models\Question;

class Answer extends Base
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
