<?php include_once 'cjfksoft/common/header_view.php';?>
<div class="container-body">
    <div class="row">
        <div class="col-lg-12">

<h3><?php echo lang('create_user_heading');?></h3>
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message_create;?></div>

<?php echo form_open("welcome/register");?>

      <p>
          <input type="hidden" name="login_post" value="create_user" />
            <?php echo lang('edit_user_lname_label', 'first_name');?>
            <?php echo form_input($first_name);?>
      </p>
      <p>
            <?php echo lang('create_user_pays', 'pays');?>
            <?php echo form_input($pays);?>
      </p>
      <p>
            <?php echo lang('create_user_city', 'city');?>
            <?php echo form_dropdown($city, $city_op);?>
      </p>

      <p>
            <?php echo lang('create_user_email_label', 'email');?>
            <?php echo form_input($email);?>
      </p>

      <p>
            <?php echo lang('create_user_phone_label', 'phone');?>
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo lang('create_user_password_label', 'password');?>
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
            <?php echo form_input($password_confirm);?>
      </p>


      <p><?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary"');?>
      </p>

<?php echo form_close();?>

      </div>
        
    </div>
</div>
<?php include_once 'cjfksoft/common/footer_view.php';