<?php

// got from default php ldapadmin config example
$config->custom->appearance['friendly_attrs'] = array(
    'facsimileTelephoneNumber' => 'Fax',
    'gid' => 'Group',
    'mail' => 'Email',
    'telephoneNumber' => 'Telephone',
    'uid' => 'User Name',
    'userPassword' => 'Password'
);

// define new server datastore
$servers = new Datastore();

// define new ldap server
$servers->newServer('ldap_pla');
$servers->setValue('server', 'base', array(isset($_SERVER["PHPLDAPADMIN_BASE"]) ? $_SERVER["PHPLDAPADMIN_BASE"] : ''));
$servers->setValue('login', 'auth_type', 'session');
$servers->setValue('server', 'tls', isset($_SERVER["PHPLDAPADMIN_USE_TLS"]));

// get env vars configuration if available
$servers->setValue('server', 'name', isset($_SERVER["PHPLDAPADMIN_NAME"]) ? $_SERVER["PHPLDAPADMIN_NAME"] : 'My LDAP Server');
$servers->setValue('server', 'host', isset($_SERVER["PHPLDAPADMIN_HOST"]) ? $_SERVER["PHPLDAPADMIN_HOST"] : 'ldap');
$servers->setValue('server', 'port', isset($_SERVER["PHPLDAPADMIN_PORT"]) ? $_SERVER["PHPLDAPADMIN_PORT"] : 389);
$servers->setValue('login', 'bind_id', isset($_SERVER["PHPLDAPADMIN_BIND_ID"]) ? $_SERVER["PHPLDAPADMIN_BIND_ID"] : 'cn=admin,dc=example,dc=com');
$servers->setValue('login', 'bind_pass', isset($_SERVER["PHPLDAPADMIN_BIND_PASS"]) ? $_SERVER["PHPLDAPADMIN_BIND_PASS"] : 'secret');
