<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Nový Odběr ski musea',
    'email_message' => 'Nová zpráva',
    'success_redirect' => '',
    'email' => array(
        'from' => 'skimuseum@harrachov.cz',
        'to' => 'Pepa.slavik2005@email.cz'
    ),
    'fields' => array(
        'name' => array(
            'order' => 1,
            'type' => 'string',
            'label' => 'Name',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Name\' is required.'
            )
        ),
        'email' => array(
            'order' => 2,
            'type' => 'email',
            'label' => 'Email',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Email\' is required.'
            )
        ),
        'message' => array(
            'order' => 3,
            'type' => 'string',
            'label' => 'Message',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Message\' is required.'
            )
        ),
    )
);

$processor = new FormProcessor();
$processor->process($form);

?>