/**
 * Created by rteja91 on 9/1/16.
 *
 */
var map;
var lat1 = -34.397;
var long1 = -150.644;
function initMap() {
    map = new google.maps.Map(document.getElementById('PropMap'), {
        center: {lat:lat1 , lng:long1 },
        zoom: 11
    });
}

$('#itemList .collection-item').on('click', function(e){
    e.preventDefault();
    var selector	= $(this);
    selector.addClass('active').siblings().removeClass('active');
    var url = window.document.location.href;
        url = url + 'estate/'+ selector.data('id');
    $.ajax({
        url: 	url,
        method: "GET",
        cache: 	false,
        dataType: 'html',
        success:function(data) {
            if (data == 0 ) {
                console.log('error');
            } else {
                $('.propDetails').html(data);
                lat1 = selector.data('lat');
                long1 = selector.data('long');
                initMap();
            }
        }
    });

    return false;
});

$('#search').on('keypress', function(e){
    if ( e.keyCode == 13 ) {

        var search = $(this);
        var url = window.document.location.href;
        url = url + 'search/' + search.val();
        $.ajax({
            url: url,
            method: "GET",
            cache: false,
            dataType: 'html',
            success: function (data) {
                if (data == 0) {
                    console.log('error');
                } else {
                    $('.propList').html(data);

                }
            }
        });
    }
});


