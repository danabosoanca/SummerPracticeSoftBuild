
$(function(){
    var $registerForm=$("#registration");
    if($registerForm.length){
        $registerForm.validate({
            rules:{
                nume:{
                    required:true,
                    minlength:3
                },
                prenume: {
                    required: true,
                    minlength: 3
                },
                gen: {
                    required: true
                },
                telefon: {
                    required: true,
                    minlength: 3
                },
                email:{
                    required:true
                },
                studiu:{
                    required:true
                },
                facultate:{
                    required:true
                },
                
                tema: {
                    required: true
                },
                firma: {
                    required: true
                }
            },
            errorPlacement: function (error, element) {

                if (element.is(":radio")) {
                    error.appendTo(element.parents('.gen'));
                }
                else if (element.is(":checkbox")) {
                    error.appendTo(element.parents('.online'));
                }
                else {
                    error.insertAfter(element);
                }

            },
            messages:{
                nume:{
                    required: 'Numele este obligatoriu'
                },
                prenume: {
                    required: 'Prenumele este obligatoriu'
                },
                telefon: {
                    required: 'Nummărul de telefon este obligatoriu'
                },
                email: {
                    required: 'Adresa de email este obligatorie'
                }
            }
    })
}
})