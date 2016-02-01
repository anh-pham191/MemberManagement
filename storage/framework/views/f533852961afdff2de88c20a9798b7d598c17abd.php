<?php $__env->startSection('content'); ?>

    <h1>List All Member</h1>
    <div ng-app="TestApp" ng-controller="TestController">
        <div class="contain" ng-repeat="m in members">

            <img class="avatar" src="{{ m.image }}">
            <?php /*<pre>{{ m.name }}</pre>*/ ?>

            <pre class="name"><a href="member/{{m.id}} ">{{m.name}}</a></pre>

            <?php echo "<br />"; ?>
        </div>

        <br>
    </div>

    <?php /*<?php foreach($members as $member): ?>*/ ?>
    <?php /*<h1><a href="<?php echo e(url('/member', $member->id)); ?>"><?php echo e($member -> name); ?></a></h1>*/ ?>

    <?php /*<h3>  <?php echo e(Form::image($member->image, '',array('height'=>80, 'width'=> 80)   )); ?>*/ ?>
    <?php /*</h3>*/ ?>
    <?php /*<?php endforeach; ?>*/ ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>