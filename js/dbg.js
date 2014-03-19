$(document).ready(function () {
    $('.dbg-tree a').click(function () {
        $(this).parent().children('.dbg-tree ul').toggle(300);
    });
    $('.dbg-tree li').hover(
        function(){
            $('li').css('background', '#fff');
            $(this).css('background', '#eee');
        },
        function(){
            $(this).css('background', '#fff');
        }
    );
    $('.dbg-tree ul').not(':first-child').hide();
});