function validation()
{
    var id=document.logform.username.value;
    var ps=document.logform.password.value;
    if(id.length==""&&ps.length=="")
    {
       alert("please enter username and password");
       return false;
    }
    else{
        if(id.length=="")
        {
            alert("please enter username");
            return false;
        }
        if(ps.length=="")
        {
            alert("please enter password");
            return false;
        }
    }
}