<?php
/**
 * Created by PhpStorm.
 * User: Somnath
 * Date: 27-Feb-17
 * Time: 10:57 AM
 * Template Name: Register
 */
$err = $_GET['err'];
get_header();

?>
<div class="clearfix"></div>
<section id="section-body">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel-heading" style="background-color: #007DDC;">
                    <h3 class="panel-title" style="color: white;">Registration Here</h3>
                </div>
                <div class="panel-body" style="border: 1px solid #ccc;">
                    <form id="signup-form" method="post" class="s-form wow zoomInUp" data-wow-delay="0.5s">
                        <div class="form-group col-md-12">
                            <label class="control-label" for="name">Enter Name: </label>
                            <input type="text" placeholder="FULL NAME" value="" name="uname" id="uname"
                                   class="form-control"/>
                        </div>
                        <div class="form-group col-md-12">
                            <label class=" control-label" for="name">Email Address: </label>
                            <input type="email" placeholder="EMAIL ID" value="" name="uemail" id="uemail"
                                   class="form-control"/>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label" for="name">Phone Number: </label>
                            <input type="number" placeholder="PHONE NO" value="" name="uphone" id="uphone"
                                   class="form-control"/>
                        </div>
                        <div class="form-group col-md-12">
                            <label class=" control-label" for="name">Enter Password:</label>
                            <input type="password" placeholder="PASSWORD" value="" name="upassword" id="upassword"
                                   class="form-control"/>
                        </div>
                        <input type="button" name="btn_submit" class="btn  btn-primary" id="btn_submit1" value="Submit"
                               style="float:right;margin-right: 17px;">

                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel-heading" style="background-color: #007DDC;">
                    <h3 class="panel-title" style="color: white;">Login Here</h3>
                </div>
                <div class="panel-body" style="border: 1px solid #ccc;">
                    <form id="login" class="s-form wow zoomInUp" name="form" action="<?php echo home_url(); ?>/login/"
                          method="post">
                        <div class="form-group col-md-12">
                            <label class="control-label" for="name">Enter Email: </label>
                            <input type="text" placeholder="Email Address" value="" name="username" id="username"
                                   class="form-control" required/>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label" for="name">Enter Password: </label>
                            <input type="password" placeholder="Password" value="" name="password" id="password"
                                   class="form-control" required/>
                        </div>
                        <input id="submit" class="btn btn btn-primary" type="submit" name="submit" value="Login"
                               style="float:right;margin-right: 17px;margin-bottom: 10px;">
                    </form>
                    <p style="margin-left: 15px; color: #D95F00"><?php echo $err; ?></p>
                </div>
            </div>

        </div>
    </div>
</section>


<?php get_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
<script type="text/javascript">
    $(function () {
        $('#btn_submit1').click(function () {
            var name = $('#uname').val();
            var email = $('#uemail').val();
            var phone = $('#uphone').val();
            var password = $('#upassword').val();

            if (name == "") {
                alert(" Full Name is a required field");
                return false;
            }

            if (email == "") {
                alert("Email is a required field");
                return false;
            }

            if (phone == "") {
                alert("Phone is a required field");
                return false;
            }

            if (password == "") {
                alert("Password is a required field");
                return false;
            }

            var data = {
                'action': 'create_user',
                'name1': name,
                'email1': email,
                'phone1': phone,
                'password1': password
            };

            $.ajax({
                type: "POST",
                url: ajaxurl,
                data: data,
                success: function (response) {
                    alert(response);
                    $("#signup-form")[0].reset();
                },
                error: function (response) {
                    alert(response);
                    $("#signup-form")[0].reset();
                }
            });
        });
    });
</script>
<?php get_footer()?>
