/**功能点1：读取上一页面共享的Cookie数据**/
var arr = document.cookie.split('; '); //此处用;+空格拆分
var cookieData = {};
for (var i = 0; i < arr.length; i++) {
    var kv = arr[i]; //"k=v"形式的键值对
    var pair = kv.split('='); //使用=拆分每个键值对
    cookieData[pair[0]] = pair[1];
}
var loginUid = cookieData['LoginUserId'];
var loginUname = cookieData['LoginUserName'];

/**功能点2：异步请求页头页页尾**/
$('#header').load('data/header.php', function() {
    //load的回调函数——异步请求成功完成后才执行
    $('#welcome').html("欢迎回来：" + loginUname);
});
$('#footer').load('data/footer.php');
/*
//修改失败！！
$('#welcome').html("欢迎回来："+loginUname);
alert('JS执行完成:'+$('#welcome').length);
*/

/**功能点3：页面加载完后，异步请求当前登录用户的购物车内容**/
$.ajax({
    type: 'GET',
    url: 'data/cart_detail.php',
    data: { uid: loginUid },
    error: function() {
        console.log('ssss');
    },
    success: function(list) {
        console.log('sdss');
        //遍历购物车中的每个商品，生成TR和TD
        var html = '';
        $.each(list, function(i, p) {
            html += `
      <tr>
          <td>
              <input type="checkbox"/>
              <input type="hidden" value="${p.did}" />
              <div><img src="${p.pic}"></div>
          </td>
          <td><a href="">${p.pname}</a></td>
          <td>${p.price}</td>
          <td>
              <button>-</button>
              <input type="text" value="${p.count}"/>
              <button>+</button>
          </td>
          <td><span>${p.price*p.count}</span></td>
          <td><a href="${p.did}">删除</a></td>
      </tr>  
      `;
        });
        $('#cart tbody').html(html);
    }
});
$('#tbody1').on('click', 'button', function() {
    var count = $(this).parent().children('input').val();

    var aaa = $(this).parent().children('input');

    if ($(this).html() == '+') {
        count++;

    } else {
        count--;

    };
    if (count == 0) {

        $(this).parent().parent().remove();

    }
    var did = $(this).parent().siblings(':first').children(':odd').val();

    $.ajax({
        url: 'data/cart_detail_update.php',
        type: 'GET',
        data: { count: count, did: did },
        success: function(list) {

            $(this).parent().children('input').val(list.count);
            // // 找到所有的span 对span进行遍历
              var spanAll=$('#tbody1>tr>td>span');
             
            var cc = $(this).parent().siblings().children('span');
            // console.log(cc);
            var price = $(this).parent().parent().children(':nth-child(3)').html();
            cc.html(price * count);
              // console.log(spanAll);
            var sum = 0;

            $.each(spanAll, function(i, p) {

                sum += parseInt(p.innerHTML);
            
             console.log(sum);

            $('#cart_footer').children().children('span').html(sum);
           });

        }.bind(this)


});
 });   
$('#tbody1').on('click', 'a:contains("删除")', function(e) {
    e.preventDefault();
    var did = $(this).parent().siblings(':first').children(':odd').val();
    var aa = $(this).parent().parent();

    $.ajax({
        url: 'data/cart_detail_delete.php',
        type: 'POST',
        data: { did: 'did' },
        success: function(list) {
            if (list.code == 1) {

                aa.remove();

            }
        }
    })


})
