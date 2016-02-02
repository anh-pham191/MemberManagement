<?php $__env->startSection('content'); ?>

    <div class="row" ng-app="TestApp" ng-controller="TestController">
        <div class="col-md-1"></div>
        <div class="col-md-5">

            <h1>List All Member</h1>
            <div class="contain" ng-repeat="m in members">

                <img class="avatar" src="<% m.image %>">
                <?php /*<pre>{{ m.name }}</pre>*/ ?>

                <pre class="name"><a href="member/<%m.id%> " name="link1" ng-click="Edit()"><%m.name%></a></pre>


                <input type="button" name="<% m.id %>" ng-click="Edit(m.id)" value="Edit <% m.name %>"><br>
                <?php /*                <?php echo e(Form::checkbox('attending_lan', 'yes')); ?>*/ ?>
                <input type="button" name="<% m.id %>" ng-click="deleteData(m.id)" value="Delete <% m.name %>"><br>

                <?php echo "<br />"; ?>
            </div>

            <br>

        </div>
        <?php /*<?php foreach($members as $member): ?>*/ ?>
        <?php /*<h1><a href="<?php echo e(url('/member', $member->id)); ?>"><?php echo e($member -> name); ?></a></h1>*/ ?>

        <?php /*<h3>  <?php echo e(Form::image($member->image, '',array('height'=>80, 'width'=> 80)   )); ?>*/ ?>
        <?php /*</h3>*/ ?>
        <?php /*<?php endforeach; ?>*/ ?>

        <div class="col-md-4">
            <h1 ng-if="isEdit==false">Add a Member Here</h1>
            <h1 ng-if="isEdit==true">Edit a Member Here</h1>


            <div class="form-group">
                    <?php /*<input name="_method" type="hidden" value="PATCH">*/ ?>

                <?php echo Form::label('name', 'Name'); ?>

                <?php echo Form::text('name', null, array( 'class'=>'form-control', 'ng-model' => 'member.name')); ?>


            </div>
            <div class="form-group">
                <?php echo Form::label('email', 'Email'); ?>

                <?php echo Form::text('email', null, array( 'class'=>'form-control', 'ng-model'=> 'member.email')); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('phone', 'Phone'); ?>

                <?php echo Form::text('phone', null, array( 'class'=>'form-control', 'ng-model' => 'member.phone')); ?>

            </div>
            <?php echo Form::label('image', 'Upload avatar'); ?>

            <?php echo Form::file('image', null, array( 'class'=>'form-control', 'ng-model' => 'member.image')); ?>



            <?php echo Form::submit( 'Add Member', array('class'=>'btn', 'ng-click' => 'saveData()', 'ng-if' => 'isEdit==false')); ?>


            <?php echo Form::submit( 'Edit Member', array('class'=>'btn', 'ng-click'=> 'saveEditData()' , 'ng-if' => 'isEdit==true')); ?>

            <?php /*<% member %>*/ ?>
            <?php /*<h1><%member.name%></h1>*/ ?>
            <?php /*<h1><%member.email%></h1>*/ ?>
            <?php /*<h1><%member.phone%></h1>*/ ?>
            <?php /*<h1><% isEdit %></h1>*/ ?>
            <?php /*<?php echo Form::close(); ?>*/ ?>
        </div>
        <div class="col-md-2"></div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>