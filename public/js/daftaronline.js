document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("recaptcha-modal");
    const container = document.getElementById("recaptcha-container");
    const openModalButton = document.getElementById("open-recaptcha-modal");
    const closeModalButton = document.getElementById("recaptcha-close");
    const form = document.querySelector("form");
    let recaptchaWidgetId;

    // Initialize reCAPTCHA
    grecaptcha.ready(() => {
        recaptchaWidgetId = grecaptcha.render("recaptcha-container", {
            sitekey: "6Le5uMIqAAAAABMROficaTKP-Lc83Ov5iij3CmSN",
            size: "normal",
            callback: onRecaptchaSuccess,
        });
    });

    // Open Modal
    openModalButton.addEventListener("click", () => {
        modal.classList.add("active");
        container.classList.add("g-recaptcha");
        modal.classList.remove("hidden");
        grecaptcha.reset(recaptchaWidgetId); // Render ulang reCAPTCHA untuk memastikan validasi berjalan
    });

    // Close Modal
    closeModalButton.addEventListener("click", () => {
        modal.classList.remove("active");
        setTimeout(() => {
            modal.classList.add("hidden");
        }, 300); // Waktu sama dengan durasi transisi
    });

    // Handle reCAPTCHA Success
    function onRecaptchaSuccess(token) {
        console.log("Token berhasil diterima:", token);
        modal.classList.remove("active");
        setTimeout(() => {
            modal.classList.add("hidden");
        }, 300);

        // Tambahkan token reCAPTCHA ke formulir
        const hiddenInput = document.createElement("input");
        hiddenInput.type = "hidden";
        hiddenInput.name = "g-recaptcha-response";
        hiddenInput.value = token;
        form.appendChild(hiddenInput);

        // Submit form
        form.submit();
    }
});
