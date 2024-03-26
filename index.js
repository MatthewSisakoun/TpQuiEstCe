const form = document.querySelector("form");
const checkboxs =[...document.querySelectorAll("input")];

const formData= new FormData();

form.addEventListener('submit',async(event)=>{
    event.preventDefault();
    for (const checkbox of checkboxs) {
        formData.append(checkbox.name,checkbox.checked ? "1" :"0");
    }
    fetch("./post",{
        method:"POST",
        body:formData
    });

})