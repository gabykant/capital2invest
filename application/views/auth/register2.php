<?php include_once 'cjfksoft/common/header_view.php';?>
<div class="container-body">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="login-form">
                    <h3>Se connecter avec votre compte Capital2Invest</h3>
                    <div id="infoMessage"><?php echo $message;?></div>
                    <?php $attributes = array('class' => 'form-horizontal', 'id' => 'login-form'); ?>
                    <?php echo form_open("auth/login", $attributes);?>
                    <div class="form-row">
                        <div class="input-group">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <input type="email" class="form-control" id="username" placeholder="Nom d'utilisateur -ou- Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group">
                            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                            <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="permanentconnection" value="">
                                        Rester connecté
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <a href="#"><?php echo lang('login_forgot_password');?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row text-center">
                        <button type="submit" class="btn btn-primary btn-info btn-lg">Se connecter</button>
                    </div>
                    <?php echo form_close();?>

                    <a href="#" class="invite-signup text-center">
                        <h5 class="lead">S'inscrire</h5>
                        <p>Vous n'avez pas encore de compte utilisateur ? Inscrivez-vous sur Capital2Invest !</p>
                        <span class="caret"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'cjfksoft/common/footer_view.php';