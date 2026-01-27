function validateForm() {

    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value;
    var mobile = document.getElementById("mobile").value.trim();

    // Name validation
    if (name === "") {
        alert("Name must not be empty");
        return false;
    }

    // Email validation
    var emailPattern = /^\S+@\S+\.\S+$/;
    if (email === "") {
        alert("Email must not be empty");
        return false;
    }
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    // Password validation
    if (password.length < 6) {
        alert("Password must be at least 6 characters long");
        return false;
    }

    // Mobile number validation
    var mobilePattern = /^[0-9]{10}$/;
    if (!mobilePattern.test(mobile)) {
        alert("Enter a valid 10-digit mobile number");
        return false;
    }

    alert("Form submitted successfully!");
    return true;
}
