window.addEventListener ("DOMContentLoaded", ()=>{
$(function()
{
        $('.click-img').on('click', function(){
            let idd = $(this).data('id');
            console.log(idd);
            document.cookie = "info="+idd;
        });   
});
});


