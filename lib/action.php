<?php
switch ($midx)
{

        case 'logout':
            session_destroy();
            alert("로그아웃", "/");
            break;

        case "login":
            $userid = isset($_POST['userid']) ? $_POST['userid'] : null;
            $userpw = isset($_POST['password']) ? $_POST['password'] : null;
            $userInfo = $pdo -> query("select * from user where userid='{$userid}' and password='{$userpw}'")->fetch();

            if($member){
                alert("이미 로그인이 되어있습니다.", '/');
            }

            if(isset($_POST['login'])){
                if($userInfo){
                    $_SESSION['member'] = $userInfo;
                    alert("로그인 성공", "/");
                }else{
                    alert("로그인 실패");
                }  
            }
            break;

        case "nemuAdd":
            $nemuName = isset($_POST['menuName']) ? $_POST['menuName'] : null;
            print_r($nemuName);
            if($nemuName){
                $pdo->query("insert into menu set menuName='{$nemuName}'");
            }
            break;
        
}

?>