Security Component - ACL (Access Control List)
==============================================

Security provides an infrastructure for sophisticated authorization systems,
which makes it possible to easily separate the actual authorization logic from
so called user providers that hold the users credentials. It is inspired by
the Java Spring framework.

Resources
---------

Documentation:

https://github.com/symfony/acl-bundle/blob/main/src/Resources/doc/index.rst

Tests
-----

You can run the unit tests with the following command:

    $ cd path/to/Symfony/Component/Security/Acl/
    $ composer.phar install --dev
    $ phpunit
