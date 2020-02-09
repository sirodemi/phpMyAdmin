
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
//var postData = {"name":"司郎"};
var array = [1,2,3];
//var aryJSON = JSON.stringify(array);
//var postData = JSON.stringify(array);

$.ajax({
	async: true,
	type: "POST",
	url: "ajax.php",
    data: {'product':array},
    success:function(data){
        alert(data);
    }
});



/*
$.post(
     "ajax.php",
     array,
 //    postData,
     function(data){
         alert(data); //結果をアラートで表示
     }
);
*/