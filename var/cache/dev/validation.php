<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'Symfony.Component.Form.Form' => 0,
'IteratorAggregate' => 1,
'Symfony.Component.Form.FormInterface' => 2,
'Symfony.Component.Form.ClearableErrorsInterface' => 3,
'Traversable' => 4,
'Countable' => 5,
'ArrayAccess' => 6,
'Sonata.UserBundle.Model.User' => 7,
'Sonata.UserBundle.Model.UserInterface' => 8,
'Stringable' => 9,
'Symfony.Component.Security.Core.User.PasswordAuthenticatedUserInterface' => 10,
'Sonata.UserBundle.Model.BCPasswordAuthenticatedUserInterface' => 11,
'Symfony.Component.Security.Core.User.EquatableInterface' => 12,
'Symfony.Component.Security.Core.User.UserInterface' => 13,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
            clone (\Symfony\Component\VarExporter\Internal\Registry::$prototypes['Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form')),
        ],
        null,
        [
            'stdClass' => [
                'constraints' => [
                    [
                        $o[1],
                    ],
                ],
                'constraintsByGroup' => [
                    [
                        'Default' => [
                            $o[1],
                        ],
                        'Form' => [
                            $o[1],
                        ],
                    ],
                ],
                'traversalStrategy' => [
                    2,
                ],
                'name' => [
                    'Symfony\\Component\\Form\\Form',
                ],
                'defaultGroup' => [
                    'Form',
                ],
                'groups' => [
                    1 => [
                        'Default',
                        'Form',
                    ],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'IteratorAggregate',
                ],
                'defaultGroup' => [
                    'IteratorAggregate',
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Symfony\\Component\\Form\\FormInterface',
                ],
                'defaultGroup' => [
                    'FormInterface',
                ],
            ],
        ],
        $o[0],
        []
    );
},
3 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Symfony\\Component\\Form\\ClearableErrorsInterface',
                ],
                'defaultGroup' => [
                    'ClearableErrorsInterface',
                ],
            ],
        ],
        $o[0],
        []
    );
},
4 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Traversable',
                ],
                'defaultGroup' => [
                    'Traversable',
                ],
            ],
        ],
        $o[0],
        []
    );
},
5 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Countable',
                ],
                'defaultGroup' => [
                    'Countable',
                ],
            ],
        ],
        $o[0],
        []
    );
},
6 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'ArrayAccess',
                ],
                'defaultGroup' => [
                    'ArrayAccess',
                ],
            ],
        ],
        $o[0],
        []
    );
},
7 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (($f = &\Symfony\Component\VarExporter\Internal\Registry::$factories)['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
            ($f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'))(),
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Symfony\\Component\\Validator\\Constraints\\NotBlank'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\NotBlank')),
            clone ($p['Symfony\\Component\\Validator\\Constraints\\Length'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\Length')),
            $f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'](),
            clone $p['Symfony\\Component\\Validator\\Constraints\\NotBlank'],
            clone $p['Symfony\\Component\\Validator\\Constraints\\Length'],
            clone ($p['Symfony\\Component\\Validator\\Constraints\\Email'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Validator\\Constraints\\Email')),
            $f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'](),
            clone $p['Symfony\\Component\\Validator\\Constraints\\NotBlank'],
            clone $p['Symfony\\Component\\Validator\\Constraints\\Length'],
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Sonata\\UserBundle\\Model\\User',
                    'username',
                    4 => 'email',
                    8 => 'plainPassword',
                ],
                'defaultGroup' => [
                    'User',
                ],
                'members' => [
                    [
                        'username' => [
                            $o[1],
                        ],
                        'email' => [
                            $o[4],
                        ],
                        'plainPassword' => [
                            $o[8],
                        ],
                    ],
                ],
                'properties' => [
                    [
                        'username' => $o[1],
                        'email' => $o[4],
                        'plainPassword' => $o[8],
                    ],
                ],
                'constraints' => [
                    1 => [
                        $o[2],
                        $o[3],
                    ],
                    4 => [
                        $o[5],
                        $o[6],
                        $o[7],
                    ],
                    8 => [
                        $o[9],
                        $o[10],
                    ],
                ],
                'constraintsByGroup' => [
                    1 => [
                        'Registration' => [
                            $o[2],
                            $o[3],
                        ],
                        'Profile' => [
                            $o[2],
                            $o[3],
                        ],
                    ],
                    4 => [
                        'Registration' => [
                            $o[5],
                            $o[6],
                            $o[7],
                        ],
                        'Profile' => [
                            $o[5],
                            $o[6],
                            $o[7],
                        ],
                    ],
                    8 => [
                        'Registration' => [
                            $o[9],
                            $o[10],
                        ],
                        'ResetPassword' => [
                            $o[9],
                            $o[10],
                        ],
                        'ChangePassword' => [
                            $o[9],
                            $o[10],
                        ],
                        'Profile' => [
                            $o[10],
                        ],
                    ],
                ],
                'class' => [
                    1 => 'Sonata\\UserBundle\\Model\\User',
                    4 => 'Sonata\\UserBundle\\Model\\User',
                    8 => 'Sonata\\UserBundle\\Model\\User',
                ],
                'property' => [
                    1 => 'username',
                    4 => 'email',
                    8 => 'plainPassword',
                ],
                'groups' => [
                    2 => [
                        'Registration',
                        'Profile',
                    ],
                    [
                        'Registration',
                        'Profile',
                    ],
                    5 => [
                        'Registration',
                        'Profile',
                    ],
                    [
                        'Registration',
                        'Profile',
                    ],
                    [
                        'Registration',
                        'Profile',
                    ],
                    9 => [
                        'Registration',
                        'ResetPassword',
                        'ChangePassword',
                    ],
                    [
                        'Registration',
                        'Profile',
                        'ResetPassword',
                        'ChangePassword',
                    ],
                ],
                'max' => [
                    3 => 180,
                    6 => 180,
                    10 => 4096,
                ],
                'min' => [
                    3 => 2,
                    6 => 2,
                    10 => 2,
                ],
            ],
        ],
        $o[0],
        []
    );
},
8 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Sonata\\UserBundle\\Model\\UserInterface',
                ],
                'defaultGroup' => [
                    'UserInterface',
                ],
            ],
        ],
        $o[0],
        []
    );
},
9 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Stringable',
                ],
                'defaultGroup' => [
                    'Stringable',
                ],
            ],
        ],
        $o[0],
        []
    );
},
10 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Symfony\\Component\\Security\\Core\\User\\PasswordAuthenticatedUserInterface',
                ],
                'defaultGroup' => [
                    'PasswordAuthenticatedUserInterface',
                ],
            ],
        ],
        $o[0],
        []
    );
},
11 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Sonata\\UserBundle\\Model\\BCPasswordAuthenticatedUserInterface',
                ],
                'defaultGroup' => [
                    'BCPasswordAuthenticatedUserInterface',
                ],
            ],
        ],
        $o[0],
        []
    );
},
12 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Symfony\\Component\\Security\\Core\\User\\EquatableInterface',
                ],
                'defaultGroup' => [
                    'EquatableInterface',
                ],
            ],
        ],
        $o[0],
        []
    );
},
13 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Symfony\\Component\\Security\\Core\\User\\UserInterface',
                ],
                'defaultGroup' => [
                    'UserInterface',
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
