$(document).ready(function(){
    $('#name').on('input',function(){
        var name=$(this).val();
        var slug=name.toLowerCase()
        .replace(/ /g, '-')
        .replace(/[^\w-]+/g, '');
        $("#slug").val(slug);
    });

});