/* main.js */
var MAX_LEN=250;
var textBox = null;			// テキストボックス
var textLength = null;		// テキストボックス内の文字数表示部分
var overlen=null;
/*
 * keyHandler: テキストボックス内の文字を表示する関数
 */
function keyHandler(){
// テキストボックスの文字列を取得
let textValue = textBox.value;
// 文字数を取得して表示
let n = textValue.length;
if(n > MAX_LEN){
  let over = n-MAX_LEN;
  overlen.innerHTML = over + "文字オーバーです。";
}
else{
  overlen.innerHTML = null;
}
textLength.innerHTML = n;
}
/*
 * 起動時の処理
 */
window.onload = function(){
// DOM取得
textBox = document.getElementById("review_main");						// テキストボックス
textLength = document.getElementById("textLength");					// 文字数表示部分
overlen = document.getElementById("overlen");//文字数オーバーした時の表示部分
// イベント設定（いずれのイベントもkeyHandlerを呼び出して文字表示を行っている）
textBox.addEventListener("keyup", keyHandler, false);	// テキストボックス内でキーを離したとき
textBox.addEventListener("paste", function(){			// テキストボックス内で貼り付けをしたとき
setTimeout(keyHandler, 100);						//	Ctrl+V, マウス右クリック+貼り付け双方に対応
}, false);
// テキストボックスの文字数を表示
keyHandler();
}
