$("input[type=number]").on("mousewheel", function(e) {
    $(e.target).blur();
});

$(".plus").click(function() {
    $("#totalProduct").text(Number($("#totalProduct").text()) + 1);
});

$(".minus").click(function() {
    if (Number($("#totalProduct").text()) > 1) {
        $("#totalProduct").text(Number($("#totalProduct").text()) - 1);
    }
});

$(".backButtonCls").click(function() {
    $("#nextButton").show();
    $("#task-details").show();
    // $('#titleId').text('Drop & Shop');
    $("#reviewButtons").hide();
    $("#timeFrameDiv").hide();
});

$(".reviewButtonCls").click(function() {
    $("#reviewButtons").hide();
    $("#timeFrameDiv").hide();
    $("#taskDetails").show();
    $("#postButtonId").show();

    var deliverTime = $('input:radio[name="delivery_time"]:checked').val();
    $("input:radio[name=delivery_time_review][value='" + deliverTime + "']").prop("checked", true);

    $(".shopAddress").text($("#shop_address").val());
    $(".deliveryAddress").text($("#delivery_address").val());
});
