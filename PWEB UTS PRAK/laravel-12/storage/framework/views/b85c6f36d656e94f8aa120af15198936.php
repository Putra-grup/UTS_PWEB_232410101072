<nav class="bg-white text-gray shadow">
    <div class="container mx-auto flex justify-between items-center p-4">
        <a span class="text-xl font-bold bg-gradient-to-r from-red-400 to-red-600 bg-clip-text text-transparent hover:text-red-700">SportShop</a>
        <div class="space-x-4">
            <a href="<?php echo e(route('dashboard')); ?>" class="hover:text-red-700">Dashboard</a>
            <a href="<?php echo e(route('pengelolaan')); ?>" class="hover:text-red-700">Pengelolaan</a>
            
            <?php
                $username = request()->query('username');
                $profileUrl = $username ? route('profile', ['username' => $username]) : route('profile');
            ?>
            <a href="<?php echo e($profileUrl); ?>" class="hover:text-red-700">Profile</a>
            <a href="<?php echo e(route('login')); ?>" class="hover:text-red-700">Logout</a>
        </div>
    </div>
</nav>
<?php /**PATH D:\PWEB UTS PRAK\laravel-12\resources\views/components/navbar.blade.php ENDPATH**/ ?>