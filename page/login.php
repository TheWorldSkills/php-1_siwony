<?
    include_once('./lib/lib.php');

    $userInfo = $pdo -> query("select * from user where userid='{$_POST['userid']}' and password='{$_POST['password']}'")->fetch();
    if($userInfo){
        print_r("로그인 성공 <br>");
        print_r($userInfo);
    }else{
        print_r("로그인 실패");
    }
?>

    <!-- visual -->
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1>We Are Creative <br>Web Programers.</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                        <a href="#" class="btn btn-common">SIGN UP</a>
                    </div>
                    <img src="images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
    </section>
    
    <!-- contents -->
    <section id="contents">
        <div class="container">
            <div class="row">
                <div class="main-content">
                    <h1 class="antitle">로그인</h1>

                    <!-- content inner -->
                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                        <form class="login-page" method="post" action="">
                            <div class="login-header margin-bottom-30">
                                <h2>Login to your account</h2>
                            </div>
                            <div class="input-group margin-bottom-20">
                                <span class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <input placeholder="아이디" name="userid" class="form-control" type="text">
                            </div>
                            <div class="input-group margin-bottom-20">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input placeholder="비밀번호" name="password" class="form-control" type="password">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary pull-right" type="submit">로그인</button>
                                </div>
                            </div>
                            <hr>
                            <h4>Forget your Password ?</h4>
                            <p>
                                <a href="#">Click here</a>to reset your password.
                            </p>
                        </form>
                    </div>
                    <!-- content inner -->

                </div>
            </div>
        </div>
    </section>
    
    <!-- footer -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="media-body">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="media-body">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        Unit C2, St.Vincent's Trading Est., <br> 
                        Feeder Road, <br> 
                        Bristol, BS2 0UY <br> 
                        United Kingdom <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Todo Blog 2019. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.dojo.com">DOJO</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
