<?php

namespace PERSCOMM\Validation;
use Violin\Violin;
use PERSCOMM\User\User

class Validator extends Violin {
    public function __construct(User $user) {
        $this->user = $user;
    }
    
    public function validate_uniqueEmail($value, $input, $args) {
        $user = $this->user->where('email', $value);
        
        return ! (bool) $user->count();
    }
}