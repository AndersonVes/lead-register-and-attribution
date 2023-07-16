function fetchAddressData(cep) {
    return fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then((response) => response.json())
        .catch((error) => console.error('Error fetching address data:', error));
}

function fillInputsWithAddressData(addressData) {
    const keys = Object.keys(addressData);
    keys.forEach((key) => {
        const inputElement = document.querySelector(`.viacep-${key}`);
        if (inputElement) {
            inputElement.value = addressData[key];
        }
    });
}

function handleCepBlur() {
    const viaCepInput = this;
    const cep = viaCepInput.value.replace(/\D/g, '');

    if (cep.length === 8) {
        fetchAddressData(cep)
            .then((data) => fillInputsWithAddressData(data));
    }
}


const viaCepInput = document.querySelector('.viacep-cep');


viaCepInput.addEventListener('blur', handleCepBlur);