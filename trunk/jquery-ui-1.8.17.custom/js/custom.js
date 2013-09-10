$( document ).ready(function()
{
    $(window).scroll(function()
    {
        if (document.body.scrollTop === 0)
             $(".navbar-inner").css({"box-shadow":"none"});
        else
             $(".navbar-inner").css({"box-shadow":"0px 3px 10px #888"});   
   });
   
   $('.register').live('click',function()
   {
        alert('click');
   });
    
});