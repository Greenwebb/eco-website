
// Get a reference to the link and the user session information (change 'userSessionInfo' to your actual session variable)
const loginLink = document.getElementById("showLoginLink");
const userSessionInfo = sessionStorage.getItem('authuser'); // or localStorage.getItem('userData') depending on your storage choice
console.log(userSessionInfo);
// Check if user session information is set or not empty
if (userSessionInfo && userSessionInfo.trim() == "") {
    // If it's set and not empty, show the button
    loginLink.style.display = "block";
} else {
    // If it's not set or empty, hide the button
    loginLink.style.display = "none";
}