<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1i7A4PI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1i7A4PI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1i7A4PI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1i7A4PI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1i7A4PI\App_KernelDevDebugContainer([
    'container.build_hash' => '1i7A4PI',
    'container.build_id' => '1e41bedb',
    'container.build_time' => 1602421802,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1i7A4PI');