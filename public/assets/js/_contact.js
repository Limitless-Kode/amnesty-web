const ContactForm = document.forms.contact;

ContactForm?.addEventListener("submit",contact);

function contact(evt){
    evt.preventDefault();
    
    const data = {
        name: ContactForm.name.value,
        email: ContactForm.email.value,
        phone: ContactForm.phone.value,
        message: ContactForm.message.value,
    }

    processing.classList.add("show");
    
    fetch("/contact_form",{
        method: 'POST',
        body:JSON.stringify(data),
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