$(document).ready(function(){
    $(".btn-mobile").click(function(){
        $('.menu').toggle(200);
    });
    $('.scroll').click(function(event){
        event.preventDefault();
       	$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1400);
   	});

});