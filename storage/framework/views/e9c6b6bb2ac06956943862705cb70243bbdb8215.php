<?php $__env->startSection('content'); ?>

<h1 class="title">Edit Entry</h1>
<form method="POST" action="/home/<?php echo e($address->id); ?>">

    <?php echo e(method_field('PATCH')); ?>


    <?php echo e(csrf_field()); ?>



    <div class ="field">
        <label class="label" for="picture">Picture</label>
        <div class="control">
            <input type="text" class="input" name="picture" placeholder="picture" value="<?php echo e($address->picture); ?>">
        </div>
    </div>

    <div class ="field">
        <label class="label" for="name">Name</label>
        <div class="control">
        <input type="text" class="input" name="name" placeholder="name" value="<?php echo e($address->name); ?>">
        </div>
    </div>

    <div class ="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="<?php echo e($address->title); ?>">
        </div>
    </div>

    <div class ="field">
        <label class="label" for="phone_number">Phone Number</label>
        <div class="control">
            <input type="text" class="input" name="phone_number" placeholder="Phone Number" value="<?php echo e($address->phone_number); ?>">
        </div>
    </div>
    <div class ="field">
        <div class="control">
            <button type="submit" class="button is-link">Update Entry</button>
        </div>

    </div>
        
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>