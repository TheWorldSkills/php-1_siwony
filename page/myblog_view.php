<?php
    if(!isset($_SESSION['member'])){
        alert("회원이 아닙니다.", "/");
    }
?>
    <!-- visual -->
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">
                                <a href="myblog.html">닉네임의 블로그</a>
                            </h1>
                            <p><small>Todo Blog of 아이디 </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    
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
                                            <h1>글보기</h1>
                                            <div class="subject">
                                                <small>[제목]</small> 글제목
                                            </div>
                                            <div class="post-bottom overflow">
                                                
                                                <ul class="nav navbar-nav post-nav">
                                                    <li><i class="fa fa-tag"></i> 작성자 : 관리자 [Master]</li>
                                                    <li><i class="fa fa-clock-o "></i> 작성일 : 2014. 04. 06</li>
                                                    <li><i class="fa fa-comments"></i> 조회 : 24</li>
                                                </ul>
                                            </div>
                                            <div class="viwebox">
                                                게시물 내용
                                            </div>
                                            <hr>
                                            <div class="pull-right">
                                                <button class="btn btn-default btn-sm" type="button" onclick="window.location='myblog.html'">목록보기</button>
                                                <button class="btn btn-default btn-sm" type="button" onclick="window.location='myblog_reply.html'">답글</button>
                                                <button class="btn btn-default btn-sm" type="button" onclick="window.location='myblog_modify.html'">수정</button>
                                                <button class="btn btn-default btn-sm" type="button">삭제</button>
                                            </div>
                                        </div>
                                        <div class="commentwrite col-md-12 row">
                                        <h2 class="bold">Comments</h2>
                                            <form>
                                                <textarea class="margin-bottom-20" type="text"></textarea>
                                                <button type="submit">등록</button>
                                            </form>
                                        </div>
                                        <div class="response-area col-md-12 row">
                                            <ul class="media-list">
                                                <li class="media">
                                                    <div class="post-comment">
                                                        <div class="media-body">
                                                            <span><i class="fa fa-user"></i>관리자[Master]</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                                            <ul class="nav navbar-nav post-nav">
                                                                <li><i class="fa fa-clock-o"></i> 2014.04.06</li>
                                                            </ul>
                                                        </div>

                                                        <div class="pull-right">
                                                            <button class="btn btn-default btn-xs" type="button">수정</button>
                                                            <button class="btn btn-default btn-xs" type="button">삭제</button>
                                                        </div>
                                                    </div>                                                   
                                                </li>
                                                <li class="media">
                                                    <div class="post-comment">
                                                        <div class="media-body">
                                                            <span><i class="fa fa-user"></i>관리자[Master]</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                                                            <ul class="nav navbar-nav post-nav">
                                                                <li><i class="fa fa-clock-o"></i> 2014.04.06</li>
                                                            </ul>
                                                        </div>

                                                        <div class="pull-right">
                                                            <button class="btn btn-default btn-xs" type="button">수정</button>
                                                            <button class="btn btn-default btn-xs" type="button">삭제</button>
                                                        </div>
                                                    </div>                                                   
                                                </li>
                                            </ul>                   
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