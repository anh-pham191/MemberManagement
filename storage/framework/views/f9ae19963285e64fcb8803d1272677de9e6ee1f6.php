<?php $__env->startSection('content'); ?>

    <div ng-app="">
        <p>Name : <input type="text" ng-model="name"></p>
        <h1>Hello {{name}}</h1>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>