/**
 * 
 * @param {type} itemId
 * @returns {undefined}
 * 
 * Функция добавления товара в корзину
 */
function addToCart(itemId){
    console.log("js - addToCart()");
    $.ajax({
        type: 'POST',
        //async: false,
        url: "/cart/addtocart/" + itemId + '/',
        dataType: 'json',
        success: function(data){
            if (data['success']){
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).hide();
                $('#removeCart_'+ itemId).show();
            }
        }
    });
}



function removeFromCart(itemId){
    console.log("js - removeFromCart ("+itemId+")");
    $.ajax({
        type: 'POST',
        //async: false,
        url: "/cart/removefromcart/" + itemId + '/',
        dataType: 'json',
        success: function(data){
            if(data['success']){
                $('#cartCntItems').html(data['cntItems']);
                $('#addCart_' + itemId).show();
                $('#removeCart_' + itemId).hide();
            }
        }
    });
}

function getData(obj_form){
    var hData = {};
    $('input, textarea, select', obj_form).each(function(){
        if (this.name && this.name!=''){
                hData[this.name] = this.value;
        console.log('hData['+this.name+'] = ' + hData[this.name]);
        }
    });
    return hData;
};



function registerNewUser(){
    var postData = getData('#registerBox');
    
    $.ajax({
        type: 'POST',
        //async: false,
        url: "/user/register",
        data: postData,
        succss: function(data){
            if (data['success']){
                alert(data['message']);
                
                $('#registerBox').hide();
                
                //$('#userLink').attr('href', '/user/');
               // $('#userLink').html(data['userName']);
                //$('#userBox').show();
                
                //$('#loginBox').hide();
               // $('#btnSaveOrder').show();
            } else {
                alert(data['message']);
            }
        }
    });
}