<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSHqp31e\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSHqp31e/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSHqp31e.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSHqp31e\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSHqp31e\App_KernelDevDebugContainer([
    'container.build_hash' => 'SHqp31e',
    'container.build_id' => 'c49a7db4',
    'container.build_time' => 1605097505,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSHqp31e');