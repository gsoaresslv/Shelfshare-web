const cep = document.querySelector('#cep');
const cidade = document.querySelector('#cidade');

cep.addEventListener('focusout', async () => {
    const cepValidate = /^[0-9]{8}$/;

    if(cepValidate.test(cep.value)) {
        fetch(`https://viacep.com.br/ws/${cep.value}/json/`)
        .then(response => response.json())
        .then(data => {
            cidade.value = data.localidade;
        })
    }
});