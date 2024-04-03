$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
function removeRow(id, url) {
    if (confirm("Bạn có chắc muốn xoá?")) {
        $.ajax({
            url: url,
            type: 'DELETE',
            dataType: 'json',
            data:{id},
            success: function (result) {
                console.log(result);
                if(result.error===false){
                    alert(result.message);
                    location.reload();
                }else{
                    alert('Có lỗi xảy ra vui lòng thử lại.');
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                console.log('Error in Operation');
            }
        });
    }
}

