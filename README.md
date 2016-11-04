# docker-phpLDAPadmin
Simple docker image for phpLDAPadmin

# Available Configuration Parameters
`PHPLDAPADMIN_BASE`: Base DNs to use for authentication. (Defaut: empty)
`PHPLDAPADMIN_USE_TLS`: Enable TLS communication with the LDAP server. (Default: `false`)
`PHPLDAPADMIN_NAME`: Server name (Default: `My LDAP Server`)
`PHPLDAPADMIN_HOST`: Hostname or IP address for the LDAP server (Default: `ldap`)
`PHPLDAPADMIN_PORT`: Port for the LDAP server (Default: `389`)
`PHPLDAPADMIN_BIND_ID`: DN to bind to the LDAP server (Default: `cn=admin,dc=example,dc=com`)
`PHPLDAPADMIN_BIND_PASS`: DN password to bind to the LDAP server (Default: `secret`)
