    function active(){
        document.getElementById("navi").style="height:370px";
        document.getElementById("ul").style="opacity:1";
        var one=1;
        }
function password(){
    let password=document.getElementById("pword").value;
    let conpassword=document.getElementById("cpword").value;
        if(password.length !=0){
            if(password!==conpassword){
                document.getElementById("passwd").innerHTML="password miss match!!";
                document.getElementById("passwd").style="color:red";
            }
        }else if(password.length==0){
            document.getElementById("passwd").innerHTML=" Empty password!!";
            document.getElementById("passwd").style="color:red";
        }
}