const form = document.querySelector("form");
statusTxt = form.querySelector(".button-area span");


form.onsubmit = (e) => {
    e.preventDefault();
    statusTxt.style.color = "#0d6efd";
    statusTxt.style.display = "block";


    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/conForm.php", true);
    xhr.onload = () => {
        if(xhr.readyState == 4 && xhr.status == 200){
            let response = xhr.response;
            if(response.indexOf("required") != -1 || response.indexOf("valid") != -1 || response.indexOf("failed") != -1){
                statusTxt.style.color = "#ff0000";
            } else {
                form.reset();
                setTimeout(() => {
                    statusTxt.style.display = "none";
                },3000)
            }
            statusTxt.innerText = response;
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}