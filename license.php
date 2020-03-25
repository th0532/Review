<?php
include "./inc/dbconnect.php";
include "./inc/left.php";
include "./inc/top.php";

    $query = "select * from license order by num DESC";
    mysqli_query($connect, $query);

    $result = mysqli_query($connect,$query);
    $i=0;
    while($row = mysqli_fetch_array($result)){
        $num[$i] = $row['num'];
        $name[$i] = $row['id'];
        $click[$i] = $row['click'];
        $date = $row['date'];
        $title[$i] = $row['title'];
        $content[$i] = $row['content'];

        $date_val[$i] = substr($date, 2, 14);

        $i++;
    }

?>  
<link rel="stylesheet" href="./assets/css/style.css">
<div class="content">
    <div class="section1">
        <div class="title">
            <h1>자격증후기</h1>
        </div>
        <div class="search">
            <input type="text"><button>검색</button>
        </div>
    </div>
    
    <div class="section2">
        <div class="table_pc">
            <table>
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>날짜</th>
                    <th>조회수</th>
                    <!-- <th>댓글</th> -->
                </tr>
                <?php 
                    $result = mysqli_query($connect,$query);
                    $i=0;
                    while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><a href="./license_view.php?num=<?=$num[$i]?>"><?=$num[$i]?></a></td>
                    <td><a href="./license_view.php?num=<?=$num[$i]?>"><?=$title[$i]?></a></td>
                    <td><?=$name[$i]?></td>
                    <td><?=$date_val[$i]?></td>
                    <td><?=$click[$i]?></td>
                </tr>
                <?php  $i++; } ?>
            </table>

            <button class="insert"><a href="./license_write.php?mode=insert">글쓰기</a></button>

            <div class="paging">
                    <a href=""><<</a>
                    <a href="">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">4</a>
                    <a href="">5</a>
                    <a href="">>></a>
            </div>
            
        </div> <!--table_pc-->

<!-- 모바일 버전을 위하여 -->
        <div class="table_mb">
            <ul>
                <?php 
                    $result = mysqli_query($connect,$query);
                    $i=0;
                    while($row = mysqli_fetch_array($result)){
                ?>
                <li>
                    <a href="./license_view.php?num=<?=$num[$i]?>">
                        <p><?=$title[$i]?></p>
                        <div class="sub_text">
                            <span><?=$name[$i]?></span>
                            <span><?=$date_val[$i]?></span>
                            <span>조회 <?=$click[$i]?></span>
                            <!-- <span>댓글 <?=$num[$i]?></span> -->
                        </div>
                    </a>
                </li>
                <?php  $i++; } ?>
            </ul>
            <button class="insert"><a href="./license_write.php?mode=insert">글쓰기</a></button>

            <div class="paging">
                    <a href=""><<</a>
                    <a href="">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">>></a>
            </div>

        </div> <!-- table_mb -->

    </div> <!-- section2 -->
    
</div> <!-- content -->