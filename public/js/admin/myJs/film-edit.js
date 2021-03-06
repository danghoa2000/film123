$("#exampleInputFile").change(function(e) {
    if (URL.createObjectURL(e.target.files[0]) != null) {
        $("#img-upload-preview").attr("src", URL.createObjectURL(e.target.files[0]));
        $("#img-upload-preview").css('display', 'block');
        $("#label-avatar").text(URL.createObjectURL(e.target.files[0]));
    }
});

$("#movie-background").click(function(e) {
    $("#img-upload-preview-background").css('display', 'none');
    $("#movie-background").val("");
    $("#label-background").text("Choose file");
});

$("#movie-background").change(function(e) {
    if (URL.createObjectURL(e.target.files[0]) != null) {
        $("#img-upload-preview-background").attr("src", URL.createObjectURL(e.target.files[0]));
        $("#img-upload-preview-background").css('display', 'block');
        $("#label-background").text(URL.createObjectURL(e.target.files[0]));
    }
});

$("#exampleInputFile").click(function(e) {
    $("#img-upload-preview").css('display', 'none');
    $("#exampleInputFile").val("");
    $("#label-avatar").text("Choose file");
});

$("#file-link-trailer").change(function(e) {
    if (URL.createObjectURL(e.target.files[0]) != null) {
        $("#label-link-trailer").text(URL.createObjectURL(e.target.files[0]));
    }
});

$("#file-link-trailer").click(function(e) {
    $("#file-link-trailer").val("");
    $("#label-link-trailer").text("Choose file");
});

$(".active").attr('class', 'nav-link');
$("#EditFilm").attr('class', 'nav-link active');
$("#master_film").attr("class", "nav-item has-treeview menu-open");

$(document).ready(function() {
    $("#film-create").validate({
        rules: {
            name: {
                required: true,
                maxlength: 255
            },
            quoc_gia: {
                required: true,
            },
            nam_sx: {
                required: true,
            },
            mota: {
                required: true,
            },
            link_trailer: {
                extension: "mp4"
            },
            avatar: {
                extension: "png|jpg|jpeg|jfif"
            },
            background: {
                extension: "png|jpg|jpeg|jfif"
            }
        },
        messages: {
            name: {
                required: "T??n film kh??ng ???????c ????? tr???ng",
                maxlength: "kh??ng qu?? 255 k?? t???",
            },
            quoc_gia: {
                required: "Qu???c gia kh??ng ???????c ????? tr???ng",
            },
            nam_sx: {
                required: "N??m s???n xu???t kh??ng ???????c ????? tr???ng",
            },
            mota: {
                required: "M?? t??? kh??ng ???????c ????? tr???ng",
            },
            link_trailer: {
                extension: "Link trailer ???????c ch???n ph???i thu???c mp4"
            },
            avatar: {
                extension: "avatar ???????c ch???n ph???i thu???c jpg,jpeg,png,jfif"
            },
            background: {
                extension: "Background ???????c ch???n ph???i thu???c jpg,jpeg,png,jfif"
            }
        }
    });
});