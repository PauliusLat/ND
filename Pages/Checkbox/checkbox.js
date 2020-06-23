
const button = document.querySelector('#button2');
button.addEventListener("click", () => {
    let answer = 111;
    document.querySelectorAll('[name="elnias"]').forEach((radio)=> {
        if(radio.checked){
            answer = radio.value;
        }
    });

    axios.post("/BIT_PHP/ND/Pages/Checkbox/checkbox2.php", {
    answer: answer
    })
    .then(function (response) {
        document.querySelector('#top').innerHTML = response.data.atsakymas;
        console.log(response.data);
    })
    .catch(function (error) {
        console.log(error);
    }); 

});