<?php
if (empty($_POST['memo'])){
  $url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
  header("HTTP/1.1 303 See Other");
  header("Location:" . $url . "/input_memo.php");
  exit();
}

// ファイルに書き込むストリングを作る
$memo = $_POST["memo"];
$date = date("Y/n/j G:i:s", time());
$newdata = $date . "  " . $memo;
try {
  $workingfileObj = new SplFileObject("working.tmp", "wb");
  $workingfileObj->flock(LOCK_EX);
  $workingfileObj->fwrite($newdata);
  $workingfileObj->flock(LOCK_UN);
} catch (Exception $e) {
  echo '<span class="error">エラーがありました。</span>';
  echo $e->getMessage();
  exit();
}

// 元ファイル
$filename = "memo.txt";
if (file_exists($filename)) {
  $fileObj = new SplFileObject($filename, "rb");
  // 元データを読み込む
  $fileObj->flock(LOCK_SH);
  $olddata = $fileObj->fread($fileObj->getSize());
  $fileObj->flocck(LOCK_UN);

  // 古いデータを作業ファイルに追記する　
  $olddata = "\n" . $olddata;
  $workingfileObj->flock(LOCK_EX);
  $workingfileObj->frite($olddata);
  $workingfileObj->flock(LOCK_UN);

  // 元ファイルを閉じる
  $fileObj = NULL;
  unlink($filename);
}

// 作業ファイルをクローズする
$workingfileObj = NULL;
rename("working.tmp", $filename);

// リダイレクト(メモを読むページへ)
$url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
header("HTTP/1.1 303 See Other");
header("Location:" . $url . "/read_memofile.php")
?>
