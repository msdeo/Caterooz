<?php $__env->startSection('title'); ?>
    Caterooz
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   
        <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?php echo e(asset('img/chilli-chicken__22934.1499830366.jpg')); ?>" alt="..." class="img-responsive">
                <div class="caption">
                    <h3>Product Title</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores error eum inventore officia quis quos totam! Asperiores deleniti, distinctio illum incidunt nulla officiis quas suscipit vitae? Magni necessitatibus repellendus voluptate!</p>
                    <div class="clearfix">
                        <div class="pull-left price">$12</div>
                        <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>