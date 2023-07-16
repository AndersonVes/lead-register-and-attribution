// CEP

function formatCEP(inputElement) {
    const cepInput = inputElement.value.replace(/\D/g, ''); // Remove all non-digit characters from the input

    if (cepInput.length > 5) {
        inputElement.value = cepInput.slice(0, 5) + '-' + cepInput.slice(5, 8);
    } else {
        inputElement.value = cepInput;
    }
}

const cepInput = document.querySelector('.mask-cep');

cepInput.addEventListener('input', function () {
    formatCEP(this);
});


// TELEFONE

function formatPhoneNumber(inputElement) {
    const phoneNumber = inputElement.value.replace(/\D/g, ''); // Remove all non-digit characters from the input

    if (phoneNumber.length === 11) {
        inputElement.value = `(${phoneNumber.slice(0, 2)}) ${phoneNumber.slice(2, 7)}-${phoneNumber.slice(7, 11)}`;
    } else if (phoneNumber.length === 10) {
        inputElement.value = `(${phoneNumber.slice(0, 2)}) ${phoneNumber.slice(2, 6)}-${phoneNumber.slice(6, 10)}`;
    } else {
        inputElement.value = phoneNumber;
    }
}

const phoneInput = document.querySelector('.mask-phone');

phoneInput.addEventListener('input', function () {
    formatPhoneNumber(this);
});