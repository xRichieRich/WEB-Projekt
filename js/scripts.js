/*!
* Start Bootstrap - Personal v1.0.1 (https://startbootstrap.com/template-overviews/personal)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-personal/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

// ---------------------------------------------------------------
// Kontaktní formulář (contact.html) – funguje bez účtu a bez API.
// Po odeslání otevře výchozího e-mailového klienta s vyplněnou zprávou.
// Uprav si níže cílovou e-mailovou adresu.
// ---------------------------------------------------------------
const CONTACT_EMAIL = "tvuj.email@example.com";

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    if (!form) return;

    const successMsg = document.getElementById("submitSuccessMessage");
    const errorMsg = document.getElementById("submitErrorMessage");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        event.stopPropagation();

        successMsg.classList.add("d-none");
        errorMsg.classList.add("d-none");

        if (!form.checkValidity()) {
            form.classList.add("was-validated");
            errorMsg.classList.remove("d-none");
            return;
        }

        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const message = document.getElementById("message").value.trim();

        const subject = "Zpráva z webu od " + name;
        const body =
            "Jméno: " + name + "\n" +
            "E-mail: " + email + "\n" +
            "Telefon: " + phone + "\n\n" +
            message;

        const mailtoLink =
            "mailto:" + CONTACT_EMAIL +
            "?subject=" + encodeURIComponent(subject) +
            "&body=" + encodeURIComponent(body);

        window.location.href = mailtoLink;

        successMsg.classList.remove("d-none");
        form.reset();
        form.classList.remove("was-validated");
    });
});