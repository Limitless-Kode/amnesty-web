function showMessage(isSuccess,message, duration){
    const body = document.querySelector("body");

    //create div
    const _message = document.createElement("div");
    _message.className = "message";
    
    //create check or cross
    const icon = document.createElement("ion-icon");
    

    //create the message element
    const text = document.createElement("p");
    text.innerText = message;

    _message.appendChild(icon);
    _message.appendChild(text);

    body.appendChild(_message);

    isSuccess ? _message.classList.add("success") : _message.classList.add("error");
    icon.setAttribute("name",isSuccess ? "checkmark-circle-outline" : "alert-circle-outline");
    icon.setAttribute("size","large");

    setTimeout(()=>{
        document.querySelector(".message").remove();
    },duration)

}