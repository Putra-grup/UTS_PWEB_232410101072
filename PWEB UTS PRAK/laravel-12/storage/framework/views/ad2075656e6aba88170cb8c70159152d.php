<?php $__env->startSection('content'); ?>
<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl text-orange-600 font-bold mb-6 text-center">Login</h2>
    <form action="<?php echo e(route('doLogin')); ?>" method="POST" class="space-y-4">
        <?php echo csrf_field(); ?>
        <div>
            <label class="block text-gray-700">Username</label>
            <input type="text" name="username" placeholder="Username" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>
        <div>
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" placeholder="Password" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>
        <div>
            <button type="submit"
                    class="w-full bg-orange-600 text-white py-2 rounded hover:bg-orange-700 transition">
                Login
            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\PWEB UTS PRAK\laravel-12\resources\views/login.blade.php ENDPATH**/ ?>