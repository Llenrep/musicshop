<?php $__env->startSection('title'); ?>
Upload a Track!
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<center>
    <h1>Upload a Track</h1>
</center> <br>

<div class="container">

<?php echo Form::open(array('url' => 'upload', 'method' => 'POST', 'class'=> 'form-horizontal', 'files' => true)); ?>


    <div class="row">
        <div class="col-lg-12">
            <center>
                <div style="border-bottom:1px solid grey; position:relative; ">
                        <font size="1" style="margin-right:60px;">
                        <!-- <label>Update Profile Picture</label> -->
                        <input type="file" name="song_file" style="font-weight:lighter;">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <?php if($errors->has('song_file')): ?> <p class="help-block"><?php echo e($errors->first('song_file')); ?></p> <?php endif; ?>
                        <br><br>
                        </font>
                </div>
            </center>
        </div>
    </div>
    <br>


    <center>
        <p>Title Of The Song:</p>
        <input type="text" name="name_of_song" value="<?php echo e(Input::old('name_of_song')); ?>">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <?php if($errors->has('name_of_song')): ?> <p class="help-block"><?php echo e($errors->first('name_of_song')); ?></p> <?php endif; ?>
    </center>
    <br>

    <div class="row">
        <div class="col-lg-4">
            <center>Image<hr>
            <input type="file" name="image" style="font-weight:lighter;">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            </center>
        </div>

        <div class="col-lg-4">
            <center>Description<hr> 
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                </div>
            </center>
        </div>

        <div class="col-lg-4">
            <center>Genre<hr>
                <div class="form-row align-items-center">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                        <center><select name="selected" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Choose...</option>
                            <option value="Trap">Trap</option>
                            <option value="Rap/Hip-Hop">Rap/Hip-Hop</option>
                            <option value="Dubstep">Dubstep</option>
                            <option value="Dancehall">Dancehall</option>
                            <option value="Future Bass">Future Bass</option>
                            <option value="Big Room">Big Room</option>
                        </select><center>   
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    </div>
                    <?php if($errors->has('selected')): ?> <p class="help-block"><?php echo e($errors->first('selected')); ?></p> <?php endif; ?>
                </div>
            </center>
        </div>
    <br>
    <center><input type="submit" class="pull-right btn btn-small btn-primary" style="font-weight:lighter;"></center>

<?php echo Form::close(); ?>


</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>