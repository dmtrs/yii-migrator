<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__),
	// application components
	'components'=>array(
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=fosscomm',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'qwerty1',
			'charset' => 'utf8',
		),
	),
    'commandMap'=>array(
        'migrate'=>array(
            'class'=>'system.cli.commands.MigrateCommand',
            'migrationPath'=>'application.migrations',
            'migrationTable'=>'tbl_migration',
            'connectionID'=>'db',
            //'templateFile'=>'application.migrations.template',
        )
    )
);
