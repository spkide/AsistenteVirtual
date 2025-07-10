<nav class="navbar bg-body-tertiary sticky-top bg-white shadow">
  <div class="container">
    <a class="navbar-brand" href="/">Asistente Virtual</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Asistente Virtual</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Saber Más</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Más Enlaces
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Información</a></li>
              <li><a class="dropdown-item" href="#">Contactanos</a></li>
              <li><a class="dropdown-item" href="#">Reseñas</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Chatbot</a></li>
            </ul>
          </li>
              <?php if(auth()->guard()->check()): ?>
              <li class="nav-item dropdown">
                <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo e(Auth::user()->name); ?>

                </a>
                <ul class="dropdown-menu">
                  <li>
                      <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>

                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.responsive-nav-link','data' => ['href' => route('logout'),'onclick' => 'event.preventDefault();
                                            this.closest(\'form\').submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout')),'onclick' => 'event.preventDefault();
                                            this.closest(\'form\').submit();']); ?>
                            <?php echo e(__('Log Out')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </form>
                  </li>
                </ul>
              </li>
              <?php else: ?>
              <li>
                <a href="<?php echo e(route('login')); ?>" class="nav-link">Log in</a>
              </li>
               <?php if(Route::has('register')): ?>
              <li>
                <a href="<?php echo e(route('register')); ?>" class="nav-link">Register</a>
                </li>
                    <?php endif; ?>
                  <?php endif; ?>
              </li>
        </ul>
      </div>
    </div>
  </div>
</nav><?php /**PATH C:\xampp\htdocs\AsistenteAlCliente\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>