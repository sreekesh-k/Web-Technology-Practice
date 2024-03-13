function togglePasswordVisibility() {
    const passwordInput = document.getElementById("password");
    const button = document.getElementById("hide-show-btn");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        button.innerHTML = "Hide";
    } else {
        passwordInput.type = "password";
        button.innerHTML = "show";
    }
}