$('.other-state').click(function(){
let btnStatus = $('.other-state').prop("checked");
if(btnStatus){
    $('#show-state').css({"display":"block"});
}else{
    $('#show-state').css("display","none");
    
}
})

function submitForm(){
    let name = $('#fname').val();
    let address = $('#address').val();
    let checkbox = $('.form-check-input:checked').val();
    let partnerOrDirector = $('#partner-director').val();
    let mobileNo = $('#mobile-no').val();
    let email = $('#email').val();
    let partner1name = $('#partner1name').val();
    let partner1mob = $('#partner1mob').val();
    let partner2name = $('#partner2name').val();
    let partner2mob = $('#partner2mob').val();
    let brand = $('#brand').val();
    let date = $('#date').val();
    let division = $('#division').val();
    let state = $('#state').val();

    let partnersName = partner1name+","+partner2name;
    let partnersMob = partner1mob+","+partner2mob;

     state === "" ? state="No" : state=state;

    $.ajax({
        url:'manage-membership.php',
        method:'post',
        data:{
            name:name,
            address:address,
            checkbox:checkbox,
            partner:partnerOrDirector,
            mobile:mobileNo,
            email:email,
            partnersName:partnersName,
            partnersMob:partnersMob,
            brand:brand,
            date:date,
            division:division,
            state:state
        },
        success:(dat)=>{
            alert("success"+dat);
        },error:(err)=>{
            alert(err);
        }
    })
}