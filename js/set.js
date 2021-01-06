$(document).ready(function(){

	uid=0;
 
});
function capchino(olkhan)
{
    $.ajax({
        url:'missuser.php?olkhan='+olkhan,
        type:'POST',
        success:function(data){
            $("#capchi").html(data);
        }
    });
}

function citt(val,olkhan)
{
    $.ajax({
        url:'missuser.php?olkhan='+olkhan+'&val='+val,
        type:'POST',
        success:function(data){
            $("#cit").html(data);
        }
    });   
}
    
function usercheck(olkhan,pan,sque,sans)
{
    var f = /^[a-zA-Z]{5}[0-9]{4}[a-zA-Z]$/;
    if(!pan.match(f) || pan == '')
    {
        document.getElementById("userid").style.borderColor="red";
        uid=0;
    }
    else
    {
        uid=1;
        document.getElementById("userid").style.borderColor="#F2F2F2";
        
    }
    $.ajax({
        url:'missuser.php?olkhan='+olkhan+'&pan='+pan+'&sque='+sque+'&sans='+sans,
        type:'POST',
        success:function(dd){
            $('#dis').html(dd);
        }
    });
}

function editdetail(what,olkhan)
{
    var my=$('#'+olkhan).serialize();
    $.ajax({
        url:'missuser.php?olkhan='+olkhan,
        type:'POST',
        data:  my,
        success:function(dd){
            $('#'+what).html(dd);
        }
    });
}
function checkpay(what,olkhan,val)
{
    $.ajax({
        url:'missuser.php?olkhan='+olkhan+'&val='+val,
        type:'POST',
        success:function(dd){
            $('#'+what).html(dd);
        }
    });
}
function userfun(val)
{
    document.getElementById("user").value=val;
}

function incomefun()
{   
    var a=$("#i1").val();
    var b=$("#i2").val();
    var c=$("#i3").val();
    var d=Number(a)+Number(b)+Number(c);
    document.getElementById("i4").value=d; 
    document.getElementById("totaldeduction").value=d; 
        
}
function taxcount()
{
    var d=$("#totaldeduction").val();
    var tax=0;
    if(d<=250000)
    {
        tax=0;
    }
    else if(d>250000 && d<=500000)
    {
        tax=(d*5)/100;
    }
    else if(d>500000 && d<=1000000)
    {
        tax=(d*20)/100;
    }
    else if(d>1000000)
    {
        tax=(d*30)/100;
    }
    document.getElementById("total_tax").value=tax;
}
function deductionfun()
{   
    var toti=$("#i4").val();
    var a1=$("#d1").val();
    var a2=$("#d2").val();
    var a3=$("#d3").val();
    var a4=$("#d4").val();
    var a5=$("#d5").val();
    var aa1=$("#dd1").val();
    var aa2=$("#dd2").val();
    var aa3=$("#dd3").val();
    var aa4=$("#dd4").val();
    var aa5=$("#dd5").val();
    var totala=Number(a1)+Number(a2)+Number(a3)+Number(a4)+Number(a5);    
    var totalaa=Number(aa1)+Number(aa2)+Number(aa3)+Number(aa4)+Number(aa5);    
    var rd=Number(toti)-Number(totalaa);
    document.getElementById("texpence").value=totala;
    document.getElementById("ttexpence").value=totalaa;
    document.getElementById("totaldeduction").value=rd;
       
}
function systemd1()
{

    var t=$("#i4").val();
    var d=$("#d1").val();
    var ti=Number(t);
    var d1=Number(d);
    var ddd1=0;
    if(ti!=0)
    {
        if(ti>=d1)
        {
            if(d1>150000)
            {
                ddd1=150000;
            }
            else    
            {
                ddd1=d1;   
            }
        }
        else
        {
            ddd1=ti;
        }
    }
    else
    {
        ddd1=0;
    }
    
    document.getElementById("dd1").value=ddd1;
}
function systemd2()
{
    var t=$("#i4").val();
    var a=$("#dd1").val();
    var d=$("#d2").val();
    var ti=Number(t);
    var d2=Number(d);
    var d11=Number(a);
    var ddd2=0;
    var td2=Number(ti)-Number(d11);
    if(ti!=0)
    {
        if(ti>=d2)
        {
            if(d2>50000)
            {
                ddd2=50000;
            }
            else    
            {
                if(d2>=td2)
                {

                    ddd2=td2;
                }
                else
                {
                    ddd2=d2;        
                }           
            }
        }
        else
        {
            if(td2<=0)
            {
             ddd2=0;   
            }
            else
            {
                ddd2=td2;
            }
        }
    }
    else
    {
        ddd2=0;
    }
    document.getElementById("dd2").value=ddd2;
}
function systemd3()
{
    var t=$("#i4").val();
    var a=$("#dd1").val();
    var d=$("#dd2").val();
    var ad3=$("#d3").val();
    var ti=Number(t);
    var d3=Number(ad3);
    var d11=Number(a);
    var d22=Number(d);
    var ddd3=0;
    var td2=Number(ti)-Number(d11)-Number(d22);
    if(ti!=0)
    {
        if(ti>=d3)
        {
            if(d3>200000)
            {
                ddd3=200000;
            }
            else    
            {
                if(d3>=td2)
                {

                    ddd3=td2;
                }
                else
                {
                    ddd3=d3;        
                }              
            }
        }
        else
        {
            if(td2<=0)
            {
             ddd3=0;   
            }
            else
            {
                ddd3=td2;
            }
        }
    }
    else
    {
        ddd3=0;
    }
    document.getElementById("dd3").value=ddd3;
}
function systemd4()
{
    var t=$("#i4").val();
    var a=$("#dd1").val();
    var d=$("#dd2").val();
    var ad3=$("#dd3").val();
    var ad4=$("#d4").val();
    var ti=Number(t);
    var d4=Number(ad4);
    var d11=Number(a);
    var d22=Number(d);
    var d33=Number(ad3);
    var ddd4=0;
    var td2=Number(ti)-Number(d11)-Number(d22)-Number(d33);
    if(ti!=0)
    {
        if(ti>=d4)
        {
            if(d4>25000)
            {
                ddd4=25000;
            }
            else    
            {
                if(d4>=td2)
                {

                    ddd4=td2;
                }
                else
                {
                    ddd4=d4;        
                }  
            }
        }
        else
        {
            if(td2<=0)
            {
             ddd4=0;   
            }
            else
            {
                ddd4=td2;
            }
        }
    }
    else
    {
        ddd4=0;
    }
    document.getElementById("dd4").value=ddd4;
}
function systemd5()
{
    var t=$("#i4").val();
    var a=$("#dd1").val();
    var d=$("#dd2").val();
    var ad3=$("#dd3").val();
    var ad4=$("#dd4").val();
    var ad5=$("#d5").val();
    var ti=Number(t);
    var d11=Number(a);
    var d22=Number(d);
    var d33=Number(ad3);
    var d44=Number(ad4);
    var d5=Number(ad5);
    var ddd5=0;
    var td2=Number(ti)-Number(d11)-Number(d22)-Number(d33)-Number(d44);
   

    if(ti!=0)
    {
        if(ti>=d5)
        {
            
                if(d5>=td2)
                {

                    ddd5=td2/2;
                }
                else
                {
                    ddd5=d5/2;        
                }  
        }
        else
        {
            if(td2<=0)
            {
             ddd5=0;   
            }
            else
            {
                ddd5=td2;
            }
        }
    }
    else
    {
        ddd5=0;
    }
    


   /*main 
    var ddd5=d5/2;*/
    document.getElementById("dd5").value=ddd5;
}