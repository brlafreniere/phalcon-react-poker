<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class User extends \Phalcon\Mvc\Model {
    static function hello() {
        echo "Hello.\n";
    }

    public function validation() {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    public function initialize() {
        $this->setSchema("phalcon_poker");
        $this->setSource("user");
    }
}
