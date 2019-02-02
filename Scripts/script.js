window.onload = function () {
    let formHandle = document.getElementsByTagName('form')[0];
    let firstName = document.getElementById("newsletter__first-name");
    let lastName = document.getElementById("newsletter__last-name");
    let email = document.getElementById("newsletter__email");
    let emailConfirm = document.getElementById("newsletter__email-confirm");
    let errorMessage = document.getElementById("newsletter__error")

    let confirmation = document.getElementById("confirmation");
    let nameDisplay = document.getElementById("confirmation__full-name");
    let emailDisplay = document.getElementById("confirmation__email");

    let refreshPage = document.getElementById("site-logo");
    formHandle.style.display = "block";
    confirmation.style.display = "none";

    refreshPage.addEventListener("click", function () {
        location.reload();
    })

    formHandle.addEventListener("submit", function () {
        if (firstName.value !== "" || lastName.value !== "") {
            nameDisplay.innerHTML = " " + firstName.value + " " + lastName.value;
            return false;
        }
        emailDisplay.innerHTML = email.value;

        if (email.value === "") {
            formError(email);
            errorMessage.innerHTML = "Please enter an Email"
            return false;
        } else {
            email.style.borderColor = "white";
        }

        if (email.value !== emailConfirm.value) {
            formError(emailConfirm);
            email.style.borderColor = "white";
            errorMessage.innerHTML = "Emails do NOT match";
            return false;
        } else {
            formSucessful();
            return false;
        }

        function formError(field) {
            field.style.borderColor = "red";
            field.focus();
            return false;
        }

        function formSucessful() {
            formHandle.style.display = "none";
            confirmation.style.display = "block";
            return false;
        }
    });
    return false;
}