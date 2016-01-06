<?php
/**
 * Local Configuration Override
 *
 * This configuration override file is for overriding environment-specific and
 * security-sensitive configuration information. Copy this file without the
 * .dist extension at the end and populate values as needed.
 *
 * @NOTE: This file is ignored from Git by default with the .gitignore included
 * in ZendSkeletonApplication. This is a good practice, as it prevents sensitive
 * credentials from accidentally being committed into version control.
 */

    return array(
        'doctrine' => array(
            'connection' => array(           
                'orm_default' => array(
                    'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                    'params' => array(
                        'host'     => 'localhost',
                        'port'     => '3306',
                        'user'     => 'root',
                        'password' => '',
                        'dbname'   => 'fstore',
                    )
                )
            )
        ),
    	/*'authentication' => array(
                'orm_default' => array(
                    'object_manager' => 'Doctrine\ORM\EntityManager',
                    'identity_class' => 'Users\Entity\User',
                    'identity_property' => 'user_name',
                    'credential_property' => 'user_password',
                ),
            ),*/
    );
