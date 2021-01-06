$(document).ready(function(){
 
});
function displaydata(olkhan,what,val)
{	
	var my=$('#'+olkhan).serialize();
    $.ajax({
        url:'missadmin.php?olkhan='+olkhan+'&what='+what+'&val='+val,
        type:'POST',
        data:  my,
        success:function(data){
            $("#"+olkhan).html(data)
        }
    });
}
