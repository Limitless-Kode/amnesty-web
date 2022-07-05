const subEmail = document.querySelectorAll('.sub-email');
const forms = document.querySelectorAll('.subscribe');
const processing = document.querySelector(".processing");
let userEmail = '';

subEmail.forEach(parentInput=>{
    parentInput.addEventListener('keyup',()=>{
        subEmail.forEach(input=>{
            userEmail = parentInput.value;
            input.value = parentInput.value;
        });
    });
});

forms.forEach(form=> form.addEventListener('submit',subscribe));

function subscribe(evt){
    evt.preventDefault();
    //send a post request via fetch API

    processing.classList.add("show");
   
    fetch("/subscribe",{
        method: 'POST',
        body:JSON.stringify({email: userEmail}),
        headers:{
            'Content-Type':'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        }
    })
    .then((data)=> data.json())
    .then(response=> {
        showMessage(response.success, response.message, 3000);
        processing.classList.remove("show");
    })
    .catch(err=>{
        showMessage(false, err, 3000);
        processing.classList.remove("show");
    });

}