const form = document.getElementById('editForm');
const submitButton = document.getElementById('submitButton');
const initialFormData = new FormData(form);

function checkFormChanges() {
  const currentFormData = new FormData(form);
  let isChanged = false;

  for (const [key, value] of currentFormData.entries()) {
    if (initialFormData.get(key) !== value) {
      isChanged = true;
      break;
    }
  }
  submitButton.disabled = !isChanged;
  if (isChanged) {
    submitButton.classList.remove('disabled');
  } else {
    submitButton.classList.add('disabled');
  }
}
form.addEventListener('input', checkFormChanges);