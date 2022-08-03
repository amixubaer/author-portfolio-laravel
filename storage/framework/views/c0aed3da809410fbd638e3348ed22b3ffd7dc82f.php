<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<div class="container mt-3">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
        <form method="post" action="<?php echo e(url('login')); ?>">
                <div class="card shadow">
                    <div class="car-header bg-success pt-2">
                        <div class="card-title font-weight-bold text-white text-center"> User Login </div>
                    </div>

                    <div class="card-body">
                            <?php if(Session::has('success')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(Session::get('success')); ?>

                                    <?php
                                        Session::forget('success');
                                    ?>
                                </div>
                            <?php endif; ?>


                        <div class="form-group">
                            <label for="email"> E-mail </label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter E-mail" value="<?php echo e(old('email')); ?>"/>
                            <?php echo $errors->first('email', '<small class="text-danger">:message</small>'); ?>

                        </div>

                        <div class="form-group">
                            <label for="password"> Password </label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" value="<?php echo e(old('password')); ?>"/>
                            <?php echo $errors->first('password', '<small class="text-danger">:message</small>'); ?>

                        </div>
                    </div>

                    <div class="card-footer d-inline-block">
                        <button type="submit" class="btn btn-success"> Login </button>
                        <p class="float-right mt-2"> Don't have an account?  <a href="<?php echo e(url('user-registration')); ?>" class="text-success"> Register </a> </p>
                    </div>
                    <?php echo csrf_field(); ?>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Jubaer\portfolio\resources\views/login.blade.php ENDPATH**/ ?>