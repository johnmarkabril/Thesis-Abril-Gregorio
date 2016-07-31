<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="LOGIN MODAL">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 style="color:#337ab7;"><center><strong>LOGIN HERE</strong></center></h3>
                <hr/>
                <?php echo form_open('Login'); ?>
                    <h6><?php echo $this->session->flashdata('error'); ?></h6>
                    <div class="form-group">
                        <label class="control-label">Email Address</label>
                        <input type="text" class="form-control" name="login_email" id="login-email" placeholder="example@example.com">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control" name="login_password" id="login-password" placeholder="•••••••••••••••">
                    </div>
                    <div><a class="cursor-pointer color-forgot" id="forget-password"><h5 class="center">Forget your password?</h5></a></div>
                    <input type="submit" value="Login" class="btn btn-primary" style="width: 100%;"/>
                </form>
            </div>
        </div>
    </div>
</div>