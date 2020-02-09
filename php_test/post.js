
$.ajax({
    // 送信方法
    type: "POST",
    // 送信先ファイル名
    url: "insert.php",
    // 受け取りデータの種類
    datatype: "json",
    // 送信データ
    data: {
        // #nameと#priceのvalueをセット
        "name" : "ibi",
        "price" : "55"
    },
    // 通信が成功した時
    success: function(data) {
        console.log("通信成功");
    },

    // 通信が失敗した時
    error: function(data) {
        console.log("通信失敗");
    }
});
