
  document.addEventListener('DOMContentLoaded', function() {
    // Get all buttons with the class 'ai-btn'
    const buttons = document.querySelectorAll('.ai-btn');

    // Add a click event listener to each button
    buttons.forEach(button => {
      button.addEventListener('click', function() {
        // Get the recipe name from the data attribute
        const recipeName = this.getAttribute('data-recipe');

        // Update the modal title dynamically
        document.getElementById('staticBackdropLabel').textContent = `Cook with AI: ${recipeName}`;

        
      });
    });
  });


document.addEventListener('DOMContentLoaded', function () {
  const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
  recognition.lang = 'en-US'; // Set the language
  recognition.interimResults = true; // Show partial results
  recognition.continuous = false; // Stop automatically after a result

  const modal = document.getElementById('staticBackdrop');
  const modalBody = document.querySelector('.modal-body');
  const startButton = document.getElementById('start-assistant');

  // Start the AI assistant
  startButton.addEventListener('click', function () {
    modalBody.innerHTML = '<p>Listening... Speak your recipe request.</p>';
    recognition.start();
  });

  // Handle recognition results
  recognition.addEventListener('result', (event) => {
    let speechText = '';
    for (let i = event.resultIndex; i < event.results.length; i++) {
      speechText += event.results[i][0].transcript;
    }

    modalBody.innerHTML = `<p>You said: ${speechText}</p>`;

    // Stop recognition when a final result is detected
    if (event.results[0].isFinal) {
      recognition.stop();
      modalBody.innerHTML += '<p>Processing your request...</p>';
      fetchRecipeFromAI(speechText);
    }
  });

  // Handle recognition end
  recognition.addEventListener('end', () => {
    console.log('Speech recognition stopped.');
  });

  // Handle errors
  recognition.addEventListener('error', (event) => {
    modalBody.innerHTML = `<p>Error: ${event.error}</p>`;
    recognition.stop(); // Ensure recognition stops on error
  });

  // Fetch recipe from the AI backend
  function fetchRecipeFromAI(recipeRequest) {
    fetch('getRecipeStepsFromAI.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ recipe: recipeRequest }),
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          const steps = data.steps.join('<br>');
          modalBody.innerHTML = `<h5>Steps:</h5><p>${steps}</p>`;
          speakResponse(`Here are the steps for your recipe: ${data.steps.join(', ')}`);
        } else {
          modalBody.innerHTML = `<p>Error: ${data.error}</p>`;
          speakResponse('I encountered an error while fetching the recipe steps.');
        }
      })
      .catch(error => {
        modalBody.innerHTML = `<p>An error occurred: ${error.message}</p>`;
        speakResponse('An error occurred. Please try again later.');
      });
  }

  // Speak the AI's response
  function speakResponse(text) {
    const utterance = new SpeechSynthesisUtterance(text);
    window.speechSynthesis.speak(utterance);
  }

  // Stop AI when the modal is closed
  modal.addEventListener('hide.bs.modal', () => {
    console.log('Modal is closing. Stopping AI...');
    // Stop speech recognition
    if (recognition) {
      recognition.stop();
    }

    // Stop speech synthesis
    if (window.speechSynthesis.speaking) {
      window.speechSynthesis.cancel();
    }

    // Clear the modal body
    modalBody.innerHTML = '<p>AI Assistant stopped. You can start again by clicking "Start AI Assistant".</p>';
  });
});
