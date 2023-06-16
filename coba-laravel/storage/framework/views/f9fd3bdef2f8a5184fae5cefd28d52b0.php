

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3"><?php echo e($post->title); ?></h2>
            <p>By <a href="/authors/$post->author->username"><?php echo e($post->author->name); ?></a> in <a href="/posts?category=<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a></p>
            <!-- Menggunakan blade special syntax artinya mencetak menggunakan php echo sekaligus menjalankan html special chars, jadi ketika ada tag html di dalam maka dia akan mengescape, sehingga apabila ingin mengeksekusi semua yang ada didalam nilai maka kita harus menggantinya dengan   -->
            <img src="https://source.unsplash.com/1200x400?<?php echo e($post->category->name); ?>" class="card-img-top image-fluid" alt="$post->category->name">
            <article class="my-3 fs-5">

                <?php echo $post->body; ?>

            </article>

            <a href="/blog" class="d-block mt-3">Back to Posts</a>
        </div>
    </div>
</div>
<article>

</article>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Application\coba-laravel\resources\views/post.blade.php ENDPATH**/ ?>