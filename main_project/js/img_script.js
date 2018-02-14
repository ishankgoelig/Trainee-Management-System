$(document).ready(function()
{
//function for prievw image.
$(function(){
$(":file").change(function(){
if(this.files && this.files[0])
{
var ab=new FileReader();
ab.onload=imageIsLoaded;
ab.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e){
$('#message').css("display","none");
$('#preview').css("display","block");
$('#previewing').attr('src', e.target.result);
};
});