// Get references to the input fields and the "Send Message" button
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const subjectInput = document.getElementById("subject");
const cityInput = document.getElementById("city");
const messageInput = document.getElementById("message");
const sendBtn = document.getElementById("sendBtn");

// Add an event listener to the "Send Message" button
sendBtn.addEventListener("click", function(event) {
  // Prevent the form from submitting and the page from reloading
  event.preventDefault();

  // Get the currently selected radio button value
  const genderInput = document.querySelector('input[name="gender"]:checked').value;

  // Create an object to store the user input data
  const userData = {
    name: nameInput.value,
    email: emailInput.value,
    subject: subjectInput.value,
    gender: genderInput,
    city: cityInput.value,
    message: messageInput.value
  };

  // Convert the userData object to a query string
  const queryParams = new URLSearchParams(userData).toString();

  // Navigate to res_contact.php with the query parameters in the URL
  window.location.href = `res_contact.php?${queryParams}`;
});

