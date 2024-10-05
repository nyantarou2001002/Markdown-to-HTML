<?php
// Parsedown ライブラリを読み込む
require 'Parsedown.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信された Markdown と出力形式を取得
    $markdownText = $_POST['markdown'];
    $outputType = $_POST['outputType'];

    // Parsedown を使って Markdown を HTML に変換
    $Parsedown = new Parsedown();
    $html = $Parsedown->text($markdownText);

    if ($outputType === "download") {
        // HTML ファイルを作成してダウンロード
        header('Content-Type: text/html');
        header('Content-Disposition: attachment; filename="converted.html"');
        echo $html;
    } else {
        // HTML をブラウザで表示
        echo "<html><body>" . $html . "</body></html>";
    }
}
