<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SIAGRA MANSDA</title>
        <link rel="stylesheet" href="style/csslogin.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-css/bootstrap.css">
        <link rel="stylesheet" href="style/formElement.css">
        <link rel="stylesheet" href="style/masterStyle.css">
    </head>
    <body>
        <div class="container">
            <div class="center">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- COL 3 -->
                    </div>
                    <div class="col-lg-6">
                        <script type="text/javascript">
                            function validateForm() {
                                if (logform.username.value == "") {
                                    alert("Username must be filled out!");
                                    logform.username.focus();
                                    return false;
                                } else if (logform.password.value == "") {
                                    alert("Password must be filled out!");
                                    logform.password.focus();
                                    return false;
                                }
                            }
                        </script>
                        <form name="logform" action="" method="post" onsubmit="return validateForm()">
                            <div class="form-top border">
                                <div class="form-top-left">
                                    <h2>SIAGRA MANSDA</h2>
                                </div>
                                <div class="form-top-right">
                                    <img src="images/mansda.png" alt="">
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Username"
                                    class="form-username form-control" autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password"
                                    class="form-password form-control" autofocus>
                                </div>
                                <div class="row">
                                    <div class="remember-me col-sm-6 col-xs-6">
                                        <label class="switch">
                                            <input type="checkbox" name="remember_me" id="remember_me">
                                            <div class="slider round"></div>
                                        </label>
                                        <p>Remember Me</p>
                                    </div>
                                    <div class="forget col-sm-6 col-xs-6">
                                        <a href="#">Forgot your password ?</a>
                                    </div>
                                </div>
                                <button type="submit" name="login" class="btn login-btn">Login</button>
                            </div>
                        </form>
                        <div class="footer-inline">
                            <span style="color=white">© 2018 Madrasah Aliyah Negeri Sidoarjo</span>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <!-- COL 3 -->
                    </div>
                </div>
            </div>
            <?php
            if (isset($_GET['messageFailed'])) {
                echo "<script type='text/javascript'>alert('Username dan Password Tidak Ditemukan');</script>";
            } elseif (isset($_GET['sessionOut'])) {
                echo "";
            }
             ?>
        </div>
    </body>
</html>
