// TELEFONE

function formatPhoneNumbers() {
  const elements = document.querySelectorAll('.mask-static-phone');

  for (const element of elements) {
    const content = element.textContent.trim();

    if (/^\d{10,11}$/.test(content)) {
      const formattedNumber = content.replace(/^(\d{2})(\d{4,5})(\d{4})$/, '($1) $2-$3');
      element.textContent = formattedNumber;
    }
  }
}

formatPhoneNumbers();

//brazilian zip code mask
function formatZipCode() {
  const elements = document.querySelectorAll('.mask-static-zipcode');

  for (const element of elements) {
    const content = element.textContent.trim();

    if (/^\d{8}$/.test(content)) {
      const formattedNumber = content.replace(/^(\d{5})(\d{3})$/, '$1-$2');
      element.textContent = formattedNumber;
    }
  }
}