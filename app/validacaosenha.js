function validation()  
{  
    var id=document.f1.user.value;  
    var ps=document.f1.pass.value;  
    if(id.length=="" && ps.length=="") {  
        alert("Ambos os campos estão vazios");  
        return false;  
    }  
    else  
    {  
        if(id.length=="") {  
            alert("Campo de email está vazio");  
            return false;  
        }   
        if (ps.length=="") {  
        alert("Campo de senha está vazio");  
        return false;  
        }  
    }                             
} 