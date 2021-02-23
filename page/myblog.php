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
                                            <h1>PHP</h1>
                                            <div class="boardlist">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-1">번호</th>
                                                            <th class="col-md-6">제목</th>
                                                            <th>작성자</th>
                                                            <th>작성일</th>
                                                            <th>조회</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>
                                                                <a href="myblog_view.html">게시물 리스트</a>
                                                            </td>
                                                            <td>관리자</td>
                                                            <td>2019-04-06</td>
                                                            <td>6</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>
                                                                &nbsp;&nbsp;<a href="myblog_view.html">└ 게시물 리스트</a>
                                                            </td>
                                                            <td>관리자</td>
                                                            <td>2019-04-06</td>
                                                            <td>8</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>
                                                                <a href="myblog_view.html">게시물 리스트</a>
                                                            </td>
                                                            <td>관리자</td>
                                                            <td>2019-04-06</td>
                                                            <td>12</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="pull-right">
                                                    <button class="btn btn-default btn-sm" type="button" onclick="window.location='myblog_write.html'">글쓰기</button>
                                                </div>
                                            </div>
                                            <div class="portfolio-pagination">
                                                <ul class="pagination">
                                                  <li><a href="#">left</a></li>
                                                  <li class="active"><a href="#">1</a></li>
                                                  <li><a href="#">2</a></li>
                                                  <li><a href="#">3</a></li>
                                                  <li><a href="#">4</a></li>
                                                  <li><a href="#">5</a></li>
                                                  <li><a href="#">6</a></li>
                                                  <li><a href="#">7</a></li>
                                                  <li><a href="#">8</a></li>
                                                  <li><a href="#">9</a></li>
                                                  <li><a href="#">right</a></li>
                                                </ul>
                                            </div>
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
