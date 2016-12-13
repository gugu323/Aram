


<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">Registration</div>
        <div class="panel-body">
            <?php echo form_open('registration/addnewsummoner'); ?>
            <div class="form-group">
                <h5 class="sr-only">Your Summoner Name</h5>
                <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50"  class="form-control" placeholder="Your Summoner Name"/>
            </div><div class="form-group">
                <h5 class="sr-only">Email Address</h5>
                <input type="email" name="email" value="<?php echo set_value('email'); ?>" size="50" class="form-control"  placeholder="Your email Adress"/>
            </div>
            <div class="form-group">

                <h5 class="sr-only">Password</h5>
                <input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50"  class="form-control" placeholder="Password"/>
            </div><div class="form-group">
                <h5 class="sr-only">Password Confirm</h5>
                <input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" class="form-control" placeholder="Password Confirm"/>
            </div>

            <div class="h5 text-center"><input type="submit" value="Registration" class="btn btn-success"/></div>

            </form>
        </div>
        <?php if (Registration::$form_vail_error_bool) { ?>
            <div class="panel-footer danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>
    </div>
</div>