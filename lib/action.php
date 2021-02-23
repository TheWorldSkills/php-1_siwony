<?php
    switch ($midx){
        case 'logout':
            session_destroy();
            alert("로그아웃");
            break;
    }
?>