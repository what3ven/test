<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2WjQuzy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2WjQuzy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2WjQuzy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2WjQuzy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2WjQuzy\App_KernelDevDebugContainer([
    'container.build_hash' => '2WjQuzy',
    'container.build_id' => '1fc37b63',
    'container.build_time' => 1658654267,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2WjQuzy');
