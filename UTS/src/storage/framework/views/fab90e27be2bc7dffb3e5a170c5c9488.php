<?php
    $plugin = filament('awcodes/light-switch');
    $alignment = $plugin->getPosition()->value;
?>

<?php if(
    filament()->hasDarkMode() &&
    (! filament()->hasDarkModeForced()) &&
    $plugin->shouldShowSwitcher()
): ?>
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
        'auth-theme-switcher fixed w-full flex p-4 z-40',
        'top-0' => str_contains($alignment, 'top'),
        'bottom-0' => str_contains($alignment, 'bottom'),
        'justify-start' => str_contains($alignment, 'left'),
        'justify-end' => str_contains($alignment, 'right'),
        'justify-center' => str_contains($alignment, 'center'),
    ]); ?>">
        <div class="rounded-lg bg-gray-50 dark:bg-gray-950">
            <div
                x-data="{
                    theme: null,

                    init: function () {
                        this.theme = localStorage.getItem('theme') || 'system'

                        $dispatch('theme-changed', theme)

                        $watch('theme', (theme) => {
                            $dispatch('theme-changed', theme)
                        })
                    },
                }"
                class="fi-theme-switcher grid grid-flow-col gap-x-1"
            >
                <?php if (isset($component)) { $__componentOriginalc2275125dc38bf084e90d639d3f0dc8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'light-switch::components.button','data' => ['icon' => 'heroicon-m-sun','theme' => 'light']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('light-switch::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-m-sun','theme' => 'light']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f)): ?>
<?php $attributes = $__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f; ?>
<?php unset($__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2275125dc38bf084e90d639d3f0dc8f)): ?>
<?php $component = $__componentOriginalc2275125dc38bf084e90d639d3f0dc8f; ?>
<?php unset($__componentOriginalc2275125dc38bf084e90d639d3f0dc8f); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc2275125dc38bf084e90d639d3f0dc8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'light-switch::components.button','data' => ['icon' => 'heroicon-m-moon','theme' => 'dark']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('light-switch::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-m-moon','theme' => 'dark']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f)): ?>
<?php $attributes = $__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f; ?>
<?php unset($__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2275125dc38bf084e90d639d3f0dc8f)): ?>
<?php $component = $__componentOriginalc2275125dc38bf084e90d639d3f0dc8f; ?>
<?php unset($__componentOriginalc2275125dc38bf084e90d639d3f0dc8f); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalc2275125dc38bf084e90d639d3f0dc8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'light-switch::components.button','data' => ['icon' => 'heroicon-m-computer-desktop','theme' => 'system']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('light-switch::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'heroicon-m-computer-desktop','theme' => 'system']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f)): ?>
<?php $attributes = $__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f; ?>
<?php unset($__attributesOriginalc2275125dc38bf084e90d639d3f0dc8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2275125dc38bf084e90d639d3f0dc8f)): ?>
<?php $component = $__componentOriginalc2275125dc38bf084e90d639d3f0dc8f; ?>
<?php unset($__componentOriginalc2275125dc38bf084e90d639d3f0dc8f); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php /**PATH /var/www/html/vendor/awcodes/light-switch/src/../resources/views/switcher.blade.php ENDPATH**/ ?>