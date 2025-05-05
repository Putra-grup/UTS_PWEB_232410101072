<?php $__env->startSection('content'); ?>
<div class="text-center">
    <h1 class="text-3xl font-bold mb-4">Dashboard</h1>
    <?php if($username): ?>
        <p class="text-xl font-semibold">Selamat datang, <span class="font-semibold"><?php echo e($username); ?></span>!</p>
    <?php else: ?>
        <p class="text-xl font-semibold">Selamat datang!</p>
    <?php endif; ?>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-7">
    <!-- Produk 1 -->
    <div class="bg-white rounded shadow p-4 transition duration-300 transform hover:shadow-lg hover:scale-105">
        <div class="mb-2">
            <span class="bg-red-500 text-white text-sm font-semibold px-2 py-1 rounded">Promo</span>
        </div>
        <img src="<?php echo e(asset('https://img.ncrsport.com/img/storage/small/DV9525-010-1.jpg')); ?>" alt="Nike Air Zoom Pegasus 41" class="w-full h-auto object-cover mb-4">
        <p class="text-sm text-gray-700">Sepatu Lari NIKE AIR ZOOM PEGASUS 41</p>
        <p class="font-semibold text-gray-900 mb-2">Air Zoom Pegasus 41</p>
        <div class="mb-2">
            <span class="bg-orange-100 text-orange-600 text-sm font-semibold px-2 py-1 rounded">Extra Disc Rp. 100.000</span>
        </div>
        <p class="text-sm text-gray-600">Black</p>
        <p class="text-sm text-gray-500 line-through">Rp 450.000</p>
        <p class="text-xl font-bold text-red-600">Rp 350.000</p>
    </div>

    <!-- Produk 2 -->
    <div class="bg-white rounded shadow p-4 transition duration-300 transform hover:shadow-lg hover:scale-105">
        <div class="mb-2">
            <span class="bg-red-500 text-white text-sm font-semibold px-2 py-1 rounded">Promo</span>
        </div>
        <img src="<?php echo e(asset('https://img.ncrsport.com/img/storage/small/FJ4250-300-1.jpg')); ?>" alt="Book 1 Ep Flagstaff" class="w-full h-auto object-cover mb-4">
        <p class="text-sm text-gray-700">Sepatu Basket NIKE BOOK ! EP Flagstaff</p>
        <p class="font-semibold text-gray-900 mb-2">Book 1 Ep Flagstaff</p>
        <div class="mb-2">
            <span class="bg-orange-100 text-orange-600 text-sm font-semibold px-2 py-1 rounded">Extra Disc Rp. 80.000</span>
        </div>
        <p class="text-sm text-gray-600">Fir</p>
        <p class="text-sm text-gray-500 line-through">Rp 480.000</p>
        <p class="text-xl font-bold text-red-600">Rp 400.000</p>
    </div>

    <!-- Produk 3 -->
    <div class="bg-white rounded shadow p-4 transition duration-300 transform hover:shadow-lg hover:scale-105">
        <div class="mb-2">
            <span class="bg-red-500 text-white text-sm font-semibold px-2 py-1 rounded">Promo</span>
        </div>
        <img src="<?php echo e(asset('https://img.ncrsport.com/img/storage/small/JQ2393-1.jpg')); ?>" alt="Harden Vol. 8 South Beach" class="w-full h-auto object-cover mb-4">
        <p class="text-sm text-gray-700">Sepatu Basket ADIDAS Harden Vol. 8 South Beach</p>
        <p class="font-semibold text-gray-900 mb-2">Harden Vol. 8 South Beach</p>
        <div class="mb-2">
            <span class="bg-orange-100 text-orange-600 text-sm font-semibold px-2 py-1 rounded">Extra Disc Rp. 40.000</span>
        </div>
        <p class="text-sm text-gray-600">Pink</p>
        <p class="text-sm text-gray-500 line-through">Rp 420.000</p>
        <p class="text-xl font-bold text-red-600">Rp 380.000</p>
    </div>
    <!-- Produk 4 -->
   <div class="bg-white rounded shadow p-4 transition duration-300 transform hover:shadow-lg hover:scale-105">
       <div class="mb-2">
           <span class="bg-yellow-500 text-white text-sm font-semibold px-2 py-1 rounded">Baru</span>
       </div>
       <img src="<?php echo e(asset('https://img.ncrsport.com/img/storage/small/DA8016-100-1.jpg')); ?>" alt="Wmns 5 Retro Low Expression" class="w-full h-auto object-cover mb-4">
       <p class="text-sm text-gray-700">Sepatu Basket Wanita AIR JORDAN wmns 5 Retro Low Ekpression</p>
       <p class="font-semibold text-gray-900 mb-2">Wmns 5 Retro Low Expression</p>
       <p class="text-sm text-gray-600">Pink</p>
       <p class="text-xl font-bold text-red-600">Rp 420.000</p>
   </div>

   <!-- Produk 5 -->
   <div class="bg-white rounded shadow p-4 transition duration-300 transform hover:shadow-lg hover:scale-105">
    <div class="mb-2">
        <span class="bg-yellow-500 text-white text-sm font-semibold px-2 py-1 rounded">Baru</span>
    </div>
    <img src="<?php echo e(asset('https://img.ncrsport.com/img/storage/small/AHSQ155-1-1.jpg')); ?>" alt="Your Own Way Wade Tee" class="w-full h-auto object-cover mb-4">
    <p class="text-sm text-gray-700">Pakaian Basket LI-NING Your Own Way Wade Tee</p>
    <p class="font-semibold text-gray-900 mb-2">Your Own Way Wade Tee</p>
    <p class="text-sm text-gray-600">Black</p>
    <p class="text-xl font-bold text-red-600">Rp 500.000</p>
   </div>

    <!-- Produk 6 -->
    <div class="bg-white rounded shadow p-4 transition duration-300 transform hover:shadow-lg hover:scale-105">
        <div class="mb-2">
            <span class="bg-yellow-500 text-white text-sm font-semibold px-2 py-1 rounded">Baru</span>
        </div>
        <img src="<?php echo e(asset('https://img.ncrsport.com/img/storage/small/FQ3681-302-1.jpg?1')); ?>" alt="Sepatu Basket NIKE Original" class="w-full h-auto object-cover mb-4">
        <p class="text-sm text-gray-700">Sepatu Basket NIKE Original</p>
        <p class="font-semibold text-gray-900 mb-2">Giannis Immortality 4 Ep</p>
        <p class="text-sm text-gray-600">Dusty Cactus</p>
        <p class="text-xl font-bold text-red-600">Rp 1.190.000</p>
    </div>
</div>

    <div class="mt-12 bg-white p-6 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">Statistik Produk Terjual</h2>
        <span class="text-lg text-right font-semibold">Total Penjualan: </span>
        <span class="text-lg font-semibold">410 Produk Terjual</span><br>
        <span class="text-lg text-right font-semibold">Total Pendapatan: </span>
        <span class="text-lg font-semibold">Rp. 177.300.000</span>


    <!-- Produk 1 -->
    <div class="mb-4 mt-7">
        <div class="flex justify-between mb-1">
            <span class="text-sm font-medium text-gray-700">Air Zoom Pegasus 41</span>
            <span class="text-sm text-gray-600">100 Terjual</span>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-blue-500 h-3 rounded-full" style="width: 100%"></div>
        </div>
    </div>

    <!-- Produk 2 -->
    <div class="mb-4">
        <div class="flex justify-between mb-1">
            <span class="text-sm font-medium text-gray-700">Book 1 Ep Flagstaff</span>
            <span class="text-sm text-gray-600">85 Terjual</span>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-blue-500 h-3 rounded-full" style="width: 85%"></div>
        </div>
    </div>

    <!-- Produk 3 -->
    <div class="mb-4">
        <div class="flex justify-between mb-1">
            <span class="text-sm font-medium text-gray-700">Harden Vol. 8 South Beach</span>
            <span class="text-sm text-gray-600">70 Terjual</span>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-blue-500 h-3 rounded-full" style="width: 70%"></div>
        </div>
    </div>

    <!-- Produk 4 -->
    <div class="mb-4">
        <div class="flex justify-between mb-1">
            <span class="text-sm font-medium text-gray-700">Wmns 5 Retro Low Expression</span>
            <span class="text-sm text-gray-600">60 Terjual</span>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-blue-500 h-3 rounded-full" style="width: 60%"></div>
        </div>
    </div>

    <!-- Produk 5 -->
    <div class="mb-4">
        <div class="flex justify-between mb-1">
            <span class="text-sm font-medium text-gray-700">Your Own Way Wade Tee</span>
            <span class="text-sm text-gray-600">50 Terjual</span>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-blue-500 h-3 rounded-full" style="width: 50%"></div>
        </div>
    </div>

    <!-- Produk 6 -->
    <div>
        <div class="flex justify-between mb-1">
            <span class="text-sm font-medium text-gray-700">UA Jet '23</span>
            <span class="text-sm text-gray-600">45 Terjual</span>
        </div>
        <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-blue-500 h-3 rounded-full" style="width: 45%"></div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\PWEB UTS PRAK\laravel-12\resources\views/dashboard.blade.php ENDPATH**/ ?>