<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGZb6wJO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGZb6wJO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGZb6wJO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGZb6wJO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGZb6wJO\App_KernelDevDebugContainer([
    'container.build_hash' => 'GZb6wJO',
    'container.build_id' => '5b3a6b70',
    'container.build_time' => 1581412811,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGZb6wJO');