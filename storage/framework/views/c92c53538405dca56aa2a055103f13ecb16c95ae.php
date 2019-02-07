<?php $__env->startSection('content'); ?>
<h1 class="title has-text-centered"> Phonebook Application </h1>
<div>

        <input type = "text" name="query" placeholder="Search for an entry">

        <button type="submit" onClick="location.href = '<?php echo e(url('home/create')); ?>'">Create Entry</button>

  <!--
        <button id="modalBtn" class="button">start modal</button>
        <div id="simpleModal" class="modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                  
                  <p>test12</p>
                </div>
                <button id="closeBtn" class="modal-close is-large" aria-label="close"></button>
              </div>
              <script src="modal.js"></script>
    -->
</div>
    
    <table class="table is-striped is-hoverable is-fullwidth">
            <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Phone Number</th>
      
                  </tr>
    <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addresses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tr>
              <td><?php echo e($addresses->picture); ?></td>
              <td><?php echo e($addresses->name); ?></td>
              <td><?php echo e($addresses->title); ?></td>
              <td><?php echo e($addresses->phone_number); ?></td>
              <td>  
            <div class="field is-grouped">
                <form method="GET" action="/home/<?php echo e($addresses->id); ?>/edit">
                    <button class = "button is-link is-small is-inline" type="submit">edit</button>
                </form>

                <form method="POST" action="/home/<?php echo e($addresses->id); ?>" >
                    <?php echo e(method_field('DELETE')); ?>

                    <?php echo e(csrf_field()); ?>

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-danger is-small is-inline">delete</button>
                        </div>
                    </div>
                
                </form>
            </div>
              </td>
              
            </tr>
          
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>