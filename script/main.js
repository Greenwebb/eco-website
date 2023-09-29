const userData = getUrlParameter('user');
console.log(userData);

if (userData) {
    
    const user = JSON.parse(decodeURIComponent(userData));
    // sessionStorage.setItem('token', csrf);
    sessionStorage.setItem('user', JSON.stringify(user));
    const profileDetailsLink = document.getElementById('profile_details');
    const asFarmerLink = document.getElementById('as_farmer');
    const asAgronomistLink = document.getElementById('as_agronomist');
    const username = document.getElementById('auth_username');
    
    // Check if the link element exists
    if (profileDetailsLink) {
        // Change its display property to "block"
        profileDetailsLink.style.display = 'block';
        asFarmerLink.style.display = 'none';
        asAgronomistLink.style.display = 'none';
        username.textContent = user.name;
    }

}else{
    const usr = JSON.parse(sessionStorage.getItem('user'));
    const profileDetailsLink = document.getElementById('profile_details');
    const asFarmerLink = document.getElementById('as_farmer');
    const asAgronomistLink = document.getElementById('as_agronomist');
    const username = document.getElementById('auth_username');
    
    // Check if the link element exists
    if (profileDetailsLink) {
        // Change its display property to "block"
        profileDetailsLink.style.display = 'block';
        asFarmerLink.style.display = 'none';
        asAgronomistLink.style.display = 'none';
        username.textContent = usr.name;
    }
}
// Function to extract query parameters from URL
function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    const results = regex.exec(window.location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}