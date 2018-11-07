<?php
require_once("TaroTool.php");
require_once("HanaTool.php");
// MyClassクラスを定義する
class MyClass {
  // ２つのトレイトを使用する
  use TaroTool, HanaTool {
    HanaTool::hello insteadOf TaroTool;
    // insteadOf...TaroToolの代わりにHanaToolを使う
  }
}
// ?>
