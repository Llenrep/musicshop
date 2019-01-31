<?php $__env->startSection('title'); ?>
Profile
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<body style="background-color: #1c1c1c; color:white; font-family: 'New Peninim MT', Times, serif;">

<div style="float:right; position:relative; border-left:1.5px solid grey; height:100%; color: white;">
    <img src="uploads/avatars/<?php echo e($user->avatar); ?>" style="width:150px; height:150px; float:right; border-radius:50%; margin-right:75px; margin-bottom:30px;"/>

    <div style="border-bottom:1px solid grey; position:relative;">
            <font size="1" style="margin-right:45px;">
            <form enctype="multipart/form-data" action="/profile" method="POST">
            <!-- <label>Update Profile Picture</label> -->
            <input type="file" name="avatar" style="font-weight:lighter;">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="submit" class="pull-right btn btn-small btn-primary" style="font-weight:lighter;">
            </form>
            </font>
    </div>

        <ul style="margin-right:65px; color: #3500D3;">
            <center><a><?php echo e($user->name); ?><br><br></a>
            <a href="/">Type<br><br></a>
            <a href="/profile" color="black">Your Likes<br><br></a>
            <a href="/">Post/Remove Music<br><br></a>
            <a href="/profile">Purchase<br><br></a></center>
        </ul>
</div>

<div>
    <div class="row justify-content-center" style="color:white;">
        <div class="col-md-12">
        <div class="card-header">Dashboard</div>
                <center><h1><?php echo e($user->name); ?>'s Profile</h1></center><hr>
                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                </div>

                <div class="row" style="color:white;">
                    <div class="col-md-12">
                        <br>
                        <h3 align="center">List Of Music</h3>
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Song</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Genre</th>
                                <th>Plays</th>
                            </tr>
                            <?php $__currentLoopData = $music; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($row['user_name']); ?></td>
                                <td><?php echo e($row['name_of_song']); ?></td>
                                <td><?php echo e($row['song_file']); ?></td>
                                <td><?php echo e($row['description']); ?></td>
                                <td><?php echo e($row['image']); ?></td>
                                <td><?php echo e($row['genre']); ?></td>
                                <td><?php echo e($row['streams']); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>

                </div>
            
        </div>
    </div>

</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>