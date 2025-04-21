function confirm(formId, formEvent, msg){

    const form = document.getElementById(formId)

    form.addEventListener(formEvent, (event) => {
        const isConfirmed = confirm(msg);
        if(!isConfirmed){
            event.preventDefault();
        }
    })
}
