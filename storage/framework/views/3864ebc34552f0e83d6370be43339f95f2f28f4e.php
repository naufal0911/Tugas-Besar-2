
<?php $__env->startSection('container'); ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                  <h1 class="mt-4" style="margin-bottom: 40px">Pemesanan Produk</h1>
                  <div class="card mb-4">
                    <div class="card-header"><i class="fa-solid fa-shop"></i>
                        Pemesanan Produk Ke Toko
                    </div>
                    <div class="card-body">
                        <?php if(session()->has('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                          <?php elseif(session()->has('error')): ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo e(session('error')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                        <?php endif; ?>
                        <form action="<?php echo e(url('/Dashboard/pemesananproduk')); ?>" method="POST" >
                          <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="ProductID"> <strong> Product ID </strong> </label>
                                <select class="form-select mb-3" aria-label="Default select example" name="productID">
                                    <option disabled selected value> -- Pilih ProductID -- </option>
                                   <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                      <option value="<?php echo e($item->productID); ?>"><?php echo e($item->productID); ?></option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                              <?php $__errorArgs = ['productID'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="invalid-feedback mb-2" role="alert">
                                  <strong><?php echo e($message); ?></strong>
                              </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                              <label for="dateshipped"> <strong> Tanggal Dikirim </strong> </label>
                              <input type="date" class="form-control mb-3 <?php $__errorArgs = ['dateshipped'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="dateshipped" style="width: 50%" placeholder="Masukkan Tanggal Diterima" value="<?php echo e(old('dateshipped')); ?>" required>
                              <?php $__errorArgs = ['dateshipped'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="invalid-feedback mb-2" role="alert">
                                  <strong><?php echo e($message); ?></strong>
                              </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                              <label for="jumlah"> <strong> Jumlah Barang </strong></label>
                              <input type="number" step="0.01" class="form-control mb-3 <?php $__errorArgs = ['jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="jumlah" style="width: 50%" aria-describedby="jumlahHelp" placeholder="Masukkan Jumlah Barang /Lusin" value="<?php echo e(old('jumlah')); ?>" required>
                              <?php $__errorArgs = ['jumlah'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="invalid-feedback mb-2" role="alert">
                                  <strong><?php echo e($message); ?></strong>
                              </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                </main>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web\resources\views/dashboard/gudang/pemesananproduk.blade.php ENDPATH**/ ?>