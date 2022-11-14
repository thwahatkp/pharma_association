$('.other-state').click(function(){
let btnStatus = $('.other-state').prop("checked");
if(btnStatus){
    $('#show-state').css({"display":"block"});
}else{
    $('#show-state').css("display","none");
    
}
})