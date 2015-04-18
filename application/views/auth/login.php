<?php include_once 'cjfksoft/common/header_view.php';?>
<div class="container-body">
    <div class="row">
        <div class="col-lg-6">
            <h1><?php echo lang('login_heading');?></h1>
            <p><?php echo lang('login_subheading');?></p>
            <div id="infoMessage"><?php echo $message;?></div>
            <?php echo form_open();?>
            <p>
                <?php echo lang('login_identity_label', 'identity');?>
                <?php echo form_input($identity, "", '');?>
            </p>
            <p>
                <?php echo lang('login_password_label', 'password');?>
                <?php echo form_input($password);?>
            </p>
            <p>
                <?php echo lang('login_remember_label', 'remember');?>
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
            </p>
            <p><?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-success"');?>&nbsp;&nbsp;
                <a href='welcome/register'>Nouveau? Cr&eacute;er votre compte</a></p>
            <?php echo form_close();?>
            <p><a href=""><?php echo lang('login_forgot_password');?></a></p>
        </div>
        
        <!-- Formulaire d'enregistrement -->
        
    </div>
</div>
<?php include_once 'cjfksoft/common/footer_view.php';