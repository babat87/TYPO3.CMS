<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'User>Task Center, Actions',
    'description' => 'Actions are \'programmed\' admin tasks which can be performed by selected regular users from the Task Center. An action could be creation of backend users, fixed SQL SELECT queries, listing of records, direct edit access to selected records etc.',
    'category' => 'module',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Kasper Skaarhoj',
    'author_email' => 'kasperYYYY@typo3.com',
    'author_company' => 'Curby Soft Multimedia',
    'version' => '8.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.0.0-8.0.99',
            'taskcenter' => '8.0.0-8.0.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
);
