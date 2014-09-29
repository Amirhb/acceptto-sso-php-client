About the project
=======================
Acceptto SSO PHP Client is a project to test Acceptto CAS service.

Configuration
=======================
You can use config.php to modify the setting of the project.

$login_path lets you to tell the cas server to redirect to which address after loging out.
``` PHP
$logout_path = 'http://localhost/CASclient';
```
Full Hostname of ACCEPTO CAS Server:
``` PHP
$cas_host = 'mfa.acceptto.com';
```

Context of the CAS Server:
``` PHP
$cas_context = '/cass';
```

Port of ACCEPTO CAS server:
``` PHP
$cas_port = 443;
```

Usage
=======================
You can call checkAuthentication() to check if the user's logged in or not.
``` PHP
phpCAS::checkAuthentication()
```

The login url
=======================
``` PHP
../cass_processor.php
```

The logout url
=======================
``` PHP
../cass_processor.php?logout=
```
