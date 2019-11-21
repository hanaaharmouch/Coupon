


$(document).ready(function () {

    $("#appbundle_payment_coupon").change(function(){
        var form_data= new FormData();
        form_data.append('coupon',$('#appbundle_payment_coupon').val());

        $.ajax({
            url: Routing.generate('verifyCoupon'),
            method: "POST",
            data: form_data,
            contentType:false,
            cache: false,
            processData: false,
            success: function(result) {
                if(result.successTest==1){
                    alert('Coupon valide');
                    $("#appbundle_payment_Start").attr("disabled", false);
                    
                }else if(result.successTest==-1){
                    alert('Coupon plus valide');
                }else{
                    alert('pas de coupon');
                }
            }
        })
        
    });
})
