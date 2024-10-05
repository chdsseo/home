<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 在这里处理表单数据（例如，发送邮件或保存到数据库）
    echo "谢谢您的留言！";
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    exit;
}
?>
