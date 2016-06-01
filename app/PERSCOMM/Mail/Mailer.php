<?php

namespace PERSCOMM\Mail;

class Mailer {
    protected $view;
    protected $mailer;
    
    public function __construct($view, $mailer) {
        $this->view = $view
        $this->mailer = $mailer;
    }
    
    public function send($template, $data, $callback) {
        
    }
}