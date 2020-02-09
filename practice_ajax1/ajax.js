
//受信
$.ajax({
    // 送信方法
    type: "POST",
    // 送信先ファイル名
    url: "ajax.txt",
    // 受け取りデータの種類
    datatype: "txt",
    // 通信が成功した時
    success: function(data) {
        console.log("通信成功");
        document.write(data);
    },

    // 通信が失敗した時
    error: function(data) {
        console.log("通信失敗");
    }
});


//送信
var array = [1,2,3];

$.ajax({
	async: true,
	type: "POST",
	url: "ajax.php",
    data: {'product':array},
    success:function(data){
        alert(data);
    }
});
