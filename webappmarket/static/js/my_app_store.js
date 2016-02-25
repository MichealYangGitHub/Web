$("#appstore-list-add").hover(function(){
    $("#appstore-list-add").attr("src", "./static/img/add-2.png");
},function(){
    $("#appstore-list-add").attr("src", "./static/img/add-1.png");
});
$("#appstore-list-add").click(function(){
    alert("You click add button");
});

$(".appstore-app-list").hover(function(){
    $(this).addClass("appstore-app-list-hover");
},function(){
    $(this).removeClass("appstore-app-list-hover");
});

$("#appstore-abstract-btn .btn-info").click(function(){
    //alert("info_" + $(this).parent().parent().parent().attr('id'));
});

$('#exampleModal').on('show.bs.modal', function (event) {
    var target = $(event.relatedTarget);
    var tagName =target.get(0).tagName;
    var modal = $(this);
    var recipient = null;
    if(tagName == "BUTTON"){
        recipient = "info_" + target.parent().parent().parent().attr('id');
    }else if(tagName == "IMG"){
        recipient = "info_" + target.parent().attr('id');
    }
    
    modal.find('.modal-title').text('New message to ' + recipient);
    modal.find('.modal-body input').val(recipient);
});

$("#appstore-abstract-btn .btn-success").click(function(){
    alert("enter_" + $(this).parent().parent().parent().attr('id'));
});

$("#appstore-abstract-btn .btn-gray").click(function(){
    if($(this).hasClass('btn-my')){
        $(this).removeClass("btn-my");
    }else{
        $(this).addClass("btn-my");
    }

});

function onResizeFunc(){
    alert("resize");
    var winWidth = 0;
    var winHeight = 0;
    if (window.innerHeight){
        winWidth = window.innerWidth;
        winHeight = window.innerHeight;
    }
        
    else if ((document.body) && (document.body.clientHeight))
    {
        winWidth = document.body.clientWidth;
        winHeight = document.body.clientHeight;
    }
    if (document.documentElement  && document.documentElement.clientHeight && document.documentElement.clientWidth)
    {
        winHeight = document.documentElement.clientHeight;
        winWidth = document.documentElement.clientWidth;
    }
    var categaryWidth = winWidth * 0.1;
    if(categaryWidth <= 100){
        categaryWidth = 100;
    }
    $("#content").height(winWidth-categaryWidth);
}