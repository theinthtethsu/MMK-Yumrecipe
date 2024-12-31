function showIngredientInput() {
  const input = document.getElementById('newIngredient');
  input.classList.toggle('hidden'); // Toggle visibility of the input box
  input.focus(); // Focus on the input box
}

function addIngredient() {
  const input = document.getElementById('newIngredient');
  if (!input.classList.contains('hidden')) {
    const ingredientText = input.value.trim();
    if (ingredientText) {
      const newIngredient = document.createElement('li');
      newIngredient.className = 'py-1';
      newIngredient.textContent = ingredientText;
      document.getElementById('ingredientsList').appendChild(newIngredient);
      input.value = ''; // Clear the input
      input.classList.add('hidden'); // Hide the input after adding
    }
  } else {
    showIngredientInput(); // Show the input box if hidden
  }
}

function previewImage(event) {
  const imagePreview = document.getElementById('imagePreview');
  const file = event.target.files[0];
  const reader = new FileReader();

  reader.onload = function (e) {
    imagePreview.src = e.target.result;
    imagePreview.classList.remove('hidden'); // Show the image preview
  }

  if (file) {
    reader.readAsDataURL(file);
  }
}

function showInput() {
  const input = document.getElementById('newInstruction');
  input.classList.toggle('hidden'); // Toggle visibility of the input box
  input.focus(); // Focus on the input box
}

function addInstruction() {
  const input = document.getElementById('newInstruction');
  if (!input.classList.contains('hidden')) {
    input.classList.remove('hidden'); // Show the input box if hidden
    input.focus(); // Focus on the input box
  }
}

document.getElementById('newInstruction').addEventListener('keypress', function (event) {
  if (event.key === 'Enter') {
    const instructionText = this.value.trim();
    if (instructionText) {
      const newInstruction = document.createElement('li');
      newInstruction.className = 'py-2';
      newInstruction.textContent = instructionText;
      document.getElementById('instructionsList').appendChild(newInstruction);
      this.value = ''; // Clear the input
      this.classList.add('hidden'); // Hide the input after adding
    }
  }
});

