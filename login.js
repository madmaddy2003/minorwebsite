function validate()
{
    var password=document.logform.pass.value;
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