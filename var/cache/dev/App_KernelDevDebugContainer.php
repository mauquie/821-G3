<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerA4nmhJR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerA4nmhJR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerA4nmhJR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerA4nmhJR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerA4nmhJR\App_KernelDevDebugContainer([
    'container.build_hash' => 'A4nmhJR',
    'container.build_id' => 'c75682ca',
    'container.build_time' => 1588689354,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerA4nmhJR');
