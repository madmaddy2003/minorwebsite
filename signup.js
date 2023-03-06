function validate()
{
    var password=document.myform.pass.value;
    var msg="";
    let len=password.length;
    if(len>6)
    {
        msg="strong password";
    }
    else{
        msg="weak password";
    }
    document.getElementById('st').innerHTML=msg ; 
}
function equal()
{
    var password=document.myform.pass.value;
    var conf=document.myform.confirm.value;
    if(password!=conf)
    {
        alert("please confirm your password");
        sleep(3);
    }
}