<?php
include "./inc/left.php";
include "./inc/top.php";

    $mode = $_GET['mode'];
?>  
<link rel="stylesheet" href="./assets/css/write.css">

<form action="./exec/write_exec.php?mode=<?=$mode?>" method ="post">
<input type="hidden" value ="community" name="db_gubun" id="">
<input type="hidden" value ="<?=$mode?>" name="mode" id="">
    <div class="content">
        <div class="section1">
            <ul>
                <li><h3>자유게시판</h3></li>
                <li>
                    <span>제목</span>
                    <input type="text" maxlength=45 name="title" >
                </li>
                <li>
                    <p>내용</p>
                    <textarea  name="content" ></textarea>
                </li>
            </ul>
            <div class="active">
                <input type="submit" value="작성">
                <button type="button" class=""><a href="./community.php">목록</a></button>
            </div>

        </div>
    </div> <!-- content -->
</form>