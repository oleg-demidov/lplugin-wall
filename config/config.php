<?php

$config['mobile_skin'] = 'mobile';
$config['mobile_theme'] = '';

$config['$config_scheme$'] = array(
    
    'mobile_skin' =>  array(
        'type'        => 'string',
        'name'        => 'Mobile skin',
        'validator'   => array(
            'type'   => 'String',
            'params' => array(
                'min'        => 1,
                'max'        => 500,
                'allowEmpty' => true,
            ),
        ),
    ),
    'mobile_theme' =>  array(
        'type'        => 'string',
        'name'        => 'Mobile theme',
        'validator'   => array(
            'type'   => 'String',
            'params' => array(
                'min'        => 1,
                'max'        => 500,
                'allowEmpty' => true,
            ),
        ),
    )
);


return $config;