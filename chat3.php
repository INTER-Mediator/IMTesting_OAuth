<?php
/**
 * INTER-Mediator
 * Copyright (c) INTER-Mediator Directive Committee (http://inter-mediator.org)
 * This project started at the end of 2009 by Masayuki Nii msyk@msyk.net.
 *
 * INTER-Mediator is supplied under MIT License.
 * Please see the full license for details:
 * https://github.com/INTER-Mediator/INTER-Mediator/blob/master/dist-docs/License.txt
 *
 * @copyright     Copyright (c) INTER-Mediator Directive Committee (http://inter-mediator.org)
 * @link          https://inter-mediator.com/
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

require_once('vendor/inter-mediator/inter-mediator/INTER-Mediator.php');

IM_Entry(
    array(
        array(
            'records' => 100000000,
            'name' => 'chat',
            'key' => 'id',
            'sort' => array(
                array('field' => 'postdt', 'direction' => 'desc'),
            ),
            'default-values' => array(
                array('field' => 'postdt', 'value' => date("Y-m-d H:i:s")),
            ),
            'authentication' => array(
                'all' => array( // load, update, new, delete
                    'target' => 'field-user',
                    'field' => 'user',
                ),
            ),
        ),
        array(
            'records' => 100000000,
            'name' => 'chat2',
            'view' => 'chat',
            'table' => 'chat',
            'key' => 'id',
            'sort' => array(
                array('field' => 'postdt', 'direction' => 'desc'),
            ),
            'default-values' => array(
                array('field' => 'postdt', 'value' => date("Y-m-d H:i:s")),
            ),
            'authentication' => array(
                'all' => array( // load, update, new, delete
                    'target' => 'field-group',
                    'field' => 'groupname',
                ),
            ),
            'post-reconstruct' => true,
        ),
    ),
    array(
        'authentication' => array( // table only, for all operations
            'is-saml' => true,
            'saml-builtin-auth' => true,
            'user' => ['mig2', 'user01'],
            'authexpired' => '60', // Set as seconds.
            'storing' => 'credential', // session-storage, 'cookie'(default), 'cookie-domainwide', 'none'
        ),
    ),
    array('db-class' => 'PDO'),
    2
);
