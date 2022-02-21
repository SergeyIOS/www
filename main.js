let form = document.querySelector(".my_form");


form.addEventListener("submit",function (e) {
    e.preventDefault();
    console.log(e.target);
    
    let	name = document.getElementById('name').value;
    let email = document.getElementById('email').value; 
    let phone = document.getElementById('phone').value; 
    let data_body = "name=" + name + "&email=" + email + "&phone=" + phone;  
    fetch("file.php", { 
        method: "POST",
        body: data_body,  
        headers:{"content-type": "application/x-www-form-urlencoded"}
        })
        
    .then( (response) => {
            if (response.status !== 200) {           
                return Promise.reject();
            }   
    return response.text()
    })
    .then(i => console.log(i))
    .catch(() => console.log('ошибка')); 
});
