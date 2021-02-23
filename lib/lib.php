<?php 
// pdo 연결하기. 
    $pdo = new PDO("mysql:host=localhost;dbname=hello;charset=utf8", "root", "", array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        
    ));
    
    session_start(); // $_SESSION 변수실행
    header("content-type: text/html; charset=utf-8"); // html docs를 한글 incode
    date_default_timezone_set("Asia/Seoul"); //시간 설정

    //query를 통한 데이터 생성 create
    // $pdo->query("insert into member set userid = 'user1', password = '1234'");

    // $pdo->query("insert into user set email = 's20065@gsm.hs.kr', classNum='1318', password = '1234'");

    // $login = $pdo->query("select * from user where email = 's20065@gsm.hs.kr' and password = '1234'");
    // print_r($login);

    //주소 가져오기
    $varray = isset($_GET['uri']) ? explode("/", $_GET['uri']) : null;
    print_r($varray);
    $pagemode = isset($varray[0]) ? $varray[0] : null;
    $midx = isset($varray[1]) ? $varray[1] : 'main';
    $page = isset($varray[2]) ? $varray[2] : 1;

    // DataBase
    function execute($sql, $parame = null)
    {
        global $pdo;
        $data = $pdo->prepare($sql);
        $data->execute($parame);
        return $data;
    }
    function fetch($sql, $parame = null){
        return execute($sql, $parame)->fetch();
    }
    function fetchAll($sql, $parame = null){
        return execute($sql, $parame)->fetchAll();
    }
    function rowCount($sql, $parame = null){
        return execute($sql, $parame)->rowCount();
    }

    // $login = $pdo->query("select * from user where email = 's20065@gsm.hs.kr' and password = '1234'")->fetch();
    // echo '<pre>';
    // print_r($login);
    // echo '<pre>';
    function alert($msg=null, $url=null){
        echo "<script>";
        echo $msg ? "alert('{$msg}');" : "";
        echo $url ? "documment.location.replace('{$url}')" : "history.back()";
        echo "</script>";
        exit;
    } 

    $member = isset($_SESSION["member"]) ? $_SESSION['member'] : null;

    if($pagemode == "action"){
        include "./lib/action.php";
        exit;
    }
?>