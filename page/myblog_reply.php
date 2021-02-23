<?php
    if(!isset($_SESSION['member'])){
        alert("회원이 아닙니다.", "/");
    }
?>
    
    <!-- contents -->
    <section id="contents">
        <div class="container">
            <div class="row">
                <div class="main-content">

                    <!-- content inner -->
                    <section id="projects">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="sidebar portfolio-sidebar">
                                        <div class="sidebar-item categories">
                                            <h3>블로그 메뉴</h3>
                                            <ul class="nav navbar-stacked">
                                                <li class="active"><a href="#">PHP<span class="pull-right">(3)</span></a></li>
                                                <li><a href="#">JavaScript<span class="pull-right">(8)</span></a></li>
                                                <li><a href="#">JSP<span class="pull-right">(4)</span></a></li>
                                                <li><a href="#">node.js<span class="pull-right">(9)</span></a></li>
                                                <li><a href="#">CSS<span class="pull-right">(3)</span></a></li>
                                                <li><a href="#">HTML5<span class="pull-right">(4)</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h1>답글쓰기</h1>
                                            <form class="boardwrite">
                                                <label>제목
                                                    <span class="color-red">*</span>
                                                </label>
                                                <input class="form-control margin-bottom-20" type="text">
                                                <label>작성자
                                                    <span class="color-red">*</span>
                                                </label>
                                                <input class="form-control margin-bottom-20" type="text">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <label>내용
                                                            <span class="color-red">*</span>
                                                        </label>
                                                        <textarea class="form-control margin-bottom-20"></textarea>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-12 text-right">
                                                        <button class="btn btn-primary btn-sm" type="submit">글작성</button>
                                                        <button class="btn btn-default btn-sm" type="reset">다시작성하기</button>
                                                        <button class="btn btn-default btn-sm" type="button" onclick="history.back();">취소</button>
                                                    </div>
                                                </div>
                                            </form> 
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- content inner -->

                </div>
            </div>
        </div>
    </section>
    
