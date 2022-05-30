
        let divs=document.querySelectorAll("form input,form select,form texarea")
    for(let input of divs){
        input.addEventListener("blur",function(event)
    {
        console.log("test")
        if(event.target.checkValidity())
        {
            event.target.classList.add("is-valid");
            event.target.classList.remove("is-invalid");
        }
        else{
            event.target.classList.add("is-invalid");
            event.target.classList.remove("is-valid");
        }
    })
    }
