Ldaptoolbox
===========

This role aims to deploy tools from the Ldap Toolbox (see ltb-project.org).

For now it is able to deploy Self-Service Password with Apache2 on Debian.


Requirements
------------


Role Variables
--------------



### Self-Service Password

Defaults settings must be overrident to enable self-service password:

```
ldaptoolbox_ssp_enabled: true
```

Configuration to access LDAP server:

```
ldaptoolbox_ssp_ldap_settings:
	ldap_url: "'ldap://localhost'"
	ldap_starttls: false
	ldap_binddn: "'cn=manager,dc=example,dc=com'"
	ldap_bindpw: "'secret'"
	ldap_base: "'dc=example,dc=com'"
	ldap_login_attribute: "'uid'"
	ldap_fullname_attribute: "'cn'"
	ldap_filter: "'(&(objectClass=person)($ldap_login_attribute={login}))'"
```

For more Self-Service Password Settings, please refer to [upstream documentation](https://self-service-password.readthedocs.io/en/latest/).


Dependencies
------------


Example Playbook
----------------

Example for deploying Self-Service Password:

    - hosts: ssp-server
      roles:
        - role: ldaptoolbox
					ldaptoolbox_ssp_enabled: true
					ldaptoolbox_ssp_ldap_settings:
						ldap_url: "'ldap://localhost'"
						ldap_starttls: false
						ldap_binddn: "'cn=manager,dc=example,dc=com'"
						ldap_bindpw: "'secret'"
						ldap_base: "'dc=example,dc=com'"
						ldap_login_attribute: "'uid'"
						ldap_fullname_attribute: "'cn'"
						ldap_filter: "'(&(objectClass=person)($ldap_login_attribute={login}))'"
					ldaptoolbox_ssp_mail_settings: {}



License
-------

GPLv3


Author Information
------------------

Mathieu Jourdan <m.jourdan@rennesmetropole.fr>
