// public/assets/js/app.js

// ViewModelの定義 (簡単な例)
function AppViewModel() {
  var self = this; // this を別の変数に保持する Knockout の慣習

  // Knockout の observable を使って、値が変わったらUIも自動で更新されるデータを作る
  self.welcomeMessage = ko.observable("Knockout.jsの準備ができました！");
  self.currentDateTime = ko.observable(new Date().toLocaleString()); // 現在日時を表示する例

  // 定期的に日時を更新する処理 (おまけ)
  setInterval(function () {
    self.currentDateTime(new Date().toLocaleString());
  }, 1000); // 1秒ごと
}

// HTMLドキュメントが読み込み終わったら実行
document.addEventListener("DOMContentLoaded", function () {
  // ViewModelのインスタンスを作成し、Knockout.jsに適用(バインド)する
  // これにより、HTML内の data-bind 属性がViewModelと連携し始める
  ko.applyBindings(new AppViewModel());
  console.log("Knockout ViewModel activated!"); // ブラウザの開発者ツールコンソールで確認用
});
