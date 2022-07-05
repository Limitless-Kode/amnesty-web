const joinForm = document.forms.join;

joinForm.addEventListener('submit',join);

function join(evt) {
    evt.preventDefault();
    const name = joinForm.name.value;
    const email = joinForm.email.value;
    const phone = joinForm.phone.value;
    const region = joinForm.region.value;
    const city = joinForm.city.value;
    const address = joinForm.address.value;

    processing.classList.add("show");

    fetch("/join",{
        method: 'POST',
        body:JSON.stringify({name,email,phone,region,city,address}),
        headers:{
            'Content-Type':'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        }
    })
    .then((data)=> data.json())
    .then(response=> {
        processing.classList.remove("show");
        showMessage(response.success, response.message, 3000);
    })
    .catch(err=>{
        processing.classList.remove("show");
        showMessage(false, err.message, 3000);
    });
}