<?php
    $userIdx = $member->id;

    if(!isset($_SESSION['member'])){
        alert("회원이 아닙니다.", "/");
    }

    $nemuName = isset($_POST['menuName']) ? $_POST['menuName'] : null;
    print_r($nemuName);
    if($nemuName){
        $pdo->query("insert into menu set menuName='{$nemuName}', userid='{$userIdx}'");
    }

    $boardName = isset($_POST['boardName']) ? $_POST['boardName'] : null;
    if($boardName){
        $pdo->query("insert into board set boardName='{$boardName}', userid='{$userIdx}'");
    }
?>
    
    <!-- contents -->
    <section id="contents">
        <div class="container">
            <div class="row">
                <div class="main-content">
                    <h1 class="antitle">블로그관리</h1>

                    <!-- content inner -->
                    <div id="testimonial-container">
                        <div class="row">
                        <form action="" method="post">
                            <div class="margin-bottom">
                                <h2 class="page-header">메뉴등록</h2>
                                <div class="testimonial">
                                    <form class="menuwrite" method="POST" action="">
                                        <label>메뉴이름
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" name="menuName" type="text">
                                        <div class="col-lg-12 text-right">
                                            <button class="btn btn-primary btn-sm" type="submit">메뉴등록</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </form>
                            <div class="margin-bottom">
                                <h2 class="page-header">메뉴관리</h2>
                                <div class="testimonial menulist">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">
                                                    번호
                                                </th>
                                                <th class="col-md-4">
                                                    메뉴이름
                                                </th>
                                                <th class="col-md-4">
                                                    게시판아이디
                                                </th>
                                                <th>
                                                    설정
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $list = $pdo->query("select * from menu where userid='{$userIdx}'")->fetchAll();
                                                foreach($list as $key => $v){
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $key + 1; ?>
                                                </td>
                                                <td>
                                                    <?php echo $v->menuName; ?>
                                                </td>
                                                <td>
                                                    <select class="form-control input-sm">
                                                    <?php 
                                                        $list = $pdo->query("select * from board where userid='{$userIdx}'")->fetchAll();
                                                        foreach($list as $key => $v){
                                                    ?>
                                                        <option><?php echo $v->boardName ?></option>
                                                    <? } ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <button class="btn btn-default btn-xs" type="button">게시판등록</button>
                                                    <button class="btn btn-default btn-xs" type="button">메뉴삭제</button>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="margin-bottom">
                                <h2 class="page-header">게시판등록</h2>
                                <div class="testimonial">
                                    <form class="menuwrite" method="POST" action="">
                                        <label>게시판아이디
                                            <span class="color-red">*</span>
                                        </label>
                                        <input class="form-control margin-bottom-20" name="boardName" type="text">
                                        <div class="col-lg-12 text-right">
                                            <button class="btn btn-primary btn-sm" type="submit">게시판등록</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="margin-bottom">
                                <h2 class="page-header">게시판리스트</h2>
                                <div class="testimonial menulist">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">
                                                    번호
                                                </th>
                                                <th class="col-md-8">
                                                    게시판아이디
                                                </th>
                                                <th>
                                                    설정
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $list = $pdo->query("select * from board where userid='{$userIdx}'")->fetchAll();
                                            foreach($list as $key => $v){
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $key ?>
                                                </td>
                                                <td>
                                                    <?php echo $v->boardName ?>
                                                </td>                                                
                                                <td>
                                                    <button class="btn btn-default btn-xs" type="button">게시판삭제</button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="margin-bottom">
                                <h2 class="page-header">회원리스트</h2>
                                <div class="testimonial menulist">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-md-1">
                                                    번호
                                                </th>
                                                <th>
                                                    아이디
                                                </th>
                                                <th>
                                                    이름
                                                </th>
                                                <th>
                                                    닉네임
                                                </th>
                                                <th>
                                                    블로그URL
                                                </th>
                                                <th>
                                                    삭제
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    admin  
                                                </td>
                                                <td>
                                                    관리자
                                                </td>
                                                <td>
                                                    Master
                                                </td> 
                                                <td>
                                                    <a href="http://127.0.0.1/Master">http://127.0.0.1/Master</a>
                                                </td>                                                 
                                                <td>
                                                    <button class="btn btn-danger btn-xs" type="button">회원삭제</button>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- content inner -->

                </div>
            </div>
        </div>
    </section>