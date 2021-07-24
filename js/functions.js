/**
 * Created by quyentv on 3/19/2015.
 */

$(document).ready(function(){

    //Test cookie
    //setCookie('sids',"1,2,3,4,5");
    //deleteCookie('sids');

    //deleteCookie('sids');   return;

    var sids = getCookie('sids');
    if (sids == null) {
        setCookie('sids','',7);  // 7 day
        sids = '';
    }


    $('.add-cart-button').click(function(){
        var id = $(this).attr('ref');

        var aids = [];   // store array id
        if (sids == ''){
            aids.push(id);
            setCookie('sids',aids.toString(),7);  // 7 day
        } else {
            aids = sids.split(',');

            // remove duplicate
            for (var i = 0; i< aids.length; i++){
                if (id == aids[i] ) {
                    return;
                }
            }

            aids.push(id);
            setCookie('sids',aids.toString(),7);  // 7 day

        }

    });


    $('.quantity').change(function(){
        var id = $(this).attr('rel');
        var quantity = $(this).val();

        // use ajax post data
        $.ajax({
            url: 'ajax_quantity.php',
            data: {
                'post_id': id,
                'quantity': quantity
            },
            success: function (data){
                var result = $.parseJSON(data);
                console.log(data);
                if (result.code == '99'){
                    $('#total-item-'+id).text('$'+result.cost);
                    $('#payment-total').text('$'+result.total);
                }
            }

        });


    });


    $('.cart_quantity_delete').click(function(){
        var id = $(this).attr('ref');

        // use ajax post data
        $.ajax({
            url: 'ajax_del.php',
            data: {
                'post_id': id
            },
            success: function (data){
                var result = $.parseJSON(data);
                console.log(data);
                if (result.code == '99'){
                    // i need set cookie again
                    setCookie('sids',result.sids,7);  // 7 day
                    window.location.reload();  // oke :)
                }
            }

        });


    });


});

/*   all function javascript here */

function setCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}


function deleteCookie(name) {
    setCookie(name,"",-1);
}