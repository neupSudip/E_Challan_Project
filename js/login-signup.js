
// for sliding signup and login page 
document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login-form");
    const signupForm = document.querySelector("#signup-form");

    document.querySelector("#link-signup-form").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("hidden-form");
        signupForm.classList.remove("hidden-form");
    });

    document.querySelector("#link-Login-form").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("hidden-form");
        signupForm.classList.add("hidden-form");
    });

    loginForm.addEventListener("submit", e => {
        e.preventDefault();
    });
});

