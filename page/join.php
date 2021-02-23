<?php
    include_once('./lib/lib.php');
    if(isset($_POST['join'])){
        $pdo->query("insert into user set userid = '{$_POST['userid']}', password = '{$_POST['password']}', username = '{$_POST['username']}', nickname = '{$_POST['nickname']}'");
    }
?>
    
    <!-- contents -->
    <section id="contents">
        <div class="container">
            <div class="row">
                <div class="main-content">
                    <h1 class="antitle">회원가입</h1>

                    <!-- content inner -->
                    <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                        <form class="signup-page" action="" method="POST">
                            <input type="hidden" name="join" value="">
                            <div class="signup-header">
                                <h2>Register a new account</h2>
                            <label>아이디
                                <span class="color-red">*</span>
                            </label>
                                <input class="form-control margin-bottom-20" name="userid" type="text">
                            <label>비밀번호
                                <span class="color-red">*</span>
                            </label>
                                <input class="form-control margin-bottom-20" name="password" type="password">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>이름
                                        <span class="color-red">*</span>
                                    </label>
                                    <input class="form-control margin-bottom-20" name="username" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label>닉네임
                                        <span class="color-red">*</span>
                                    </label>
                                    <input class="form-control margin-bottom-20" name="nickname" type="text">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-8">
                                    <p>Already a member? <br> Click 
                                        <a href="login.html">HERE</a>to login to your account.</p>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-primary" type="submit">회원가입</button>
                                </div>
                            </div>
                        </form>  
                    </div>
                    <!-- content inner -->

                </div>
            </div>
        </div>
    </section>