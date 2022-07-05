const filterForm = document.forms.filter;

filterForm.addEventListener('submit',(evt)=>{
    evt.preventDefault();
    const filter = filterForm.filter.value.trim();
    filterResult(filter);
});

filterForm.filter.addEventListener('input',(evt)=>{
    const filter = filterForm.filter.value.trim();
    if(filter == "") filterResult(filter);
});

function filterResult(filter) {
    const files = document.querySelectorAll('.file');

    files.forEach(file=>{
        const filterValue = file.getAttribute('data-filter');
        if(!filterValue.toLocaleLowerCase().includes(filter.toLocaleLowerCase())) file.style.display = 'none';
        else file.style.display = 'inline-block';
    })
}