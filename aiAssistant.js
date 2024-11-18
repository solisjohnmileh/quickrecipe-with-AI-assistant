document.addEventListener("DOMContentLoaded", () => {
    const startButton = document.getElementById("start-assist");
    const restartVoice = document.getElementById("repeat-mode");
    const voiceImage = document.getElementById("voice-image");
    const assistantContainer = document.getElementById("assistant-container");
    const modal = new bootstrap.Modal(document.getElementById("staticBackdrop")); // Initialize the modal

    // Initialize Speech Recognition
    const texts = document.querySelector(".texts");
    window.SpeechRecognition =
        window.SpeechRecognition || window.webkitSpeechRecognition;
    const recognition = new SpeechRecognition();
    recognition.interimResults = true;

    let p = document.createElement("p");

    // Function to play AI introduction
    function introduceAI() {
        const introText = "Hello! I am your AI assistant. I can help you with cooking instructions and more. How can I assist you today?";
        const utterance = new SpeechSynthesisUtterance(introText);

        // Speak the introduction
        window.speechSynthesis.speak(utterance);

        // Display the introduction in the text container
        const aiResponse = document.createElement("p");
        aiResponse.classList.add("ai-response");
        aiResponse.innerText = introText;
        texts.appendChild(aiResponse);
    }





//Starting the recognition and the AI with the startbutton
    startButton.addEventListener("click", () => {
        // Hide the voice image
        voiceImage.style.display = "none";

        // Show the container and texts
        assistantContainer.style.display = "block";

        // Optional: Add a spinner to indicate loading
        const spinner = document.getElementById("loading-spinner");
        spinner.style.display = "block";

        // Start the speech recognition functionality
        recognition.start();

        // Stop spinner after speech recognition starts
        recognition.addEventListener("start", () => {
            spinner.style.display = "none";
        });

        // Introduce the AI after starting recognition
        introduceAI();
    });

    
//repeat or refresh the voice recognition
restartVoice.addEventListener("click", ()=>{



recognition.start();

});


    recognition.addEventListener("result", (e) => {
        texts.appendChild(p);
        const text = Array.from(e.results)
            .map((result) => result[0])
            .map((result) => result.transcript)
            .join("");

        p.innerText = text;

        if (e.results[0].isFinal) {
            // Send the text to the backend
            fetch("getRecipeStepsFromAI.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ query: text }),
            })
                .then((response) => response.json())
                .then((data) => {
                    // Clean up the AI's response: remove unwanted characters like asterisks
                    let cleanResponse = data.response.replace(/[^\w\s,.!?]/g, ''); // Remove special characters except letters, numbers, and basic punctuation

                    // Display the AI's cleaned response
                    const aiResponse = document.createElement("p");
                    aiResponse.classList.add("ai-response");
                    aiResponse.innerText = cleanResponse;
                    texts.appendChild(aiResponse);

                    // Speak the cleaned AI response
                    const utterance = new SpeechSynthesisUtterance(cleanResponse);
                    window.speechSynthesis.speak(utterance);
                })
                .catch((error) => {
                    console.error("Error:", error);
                });

            p = document.createElement("p");
        }
    });

    // Stop voice recognition and AI assistant when modal is closed
    const modalElement = document.getElementById("staticBackdrop");
    modalElement.addEventListener("hidden.bs.modal", () => {
        // Stop the speech recognition
        recognition.stop();

        // Optionally, stop any active speech synthesis (AI speaking)
        window.speechSynthesis.cancel();  // This will stop any ongoing speech synthesis

        // Optionally, clear the texts area
        texts.innerHTML = "";

        // Reset the UI elements related to the assistant
        voiceImage.style.display = "block";
        assistantContainer.style.display = "none";
        document.getElementById("loading-spinner").style.display = "none";
    });
});
