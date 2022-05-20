<?php 

include('common.php');

$title = $_POST['title'];
$content = addslashes($_POST['content']);
$writer = $_SESSION['email'];
$insertTime = date("Y-m-d H:i:s");
// print($insertTime);

$sql = "insert into board set
        title = '$title',
        content = '$content',
        writer = '$writer',
        insertTime = '$insertTime'
        ";

$result = $conn -> query($sql);

if($result) {
    echo "
    <script>
        alert('등록성공.');
        location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('글 등록 실패했습니다.');
        location.back();
    </script>
    ";
}

?>