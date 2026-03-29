document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const responseMsg = document.getElementById("responseMsg");

    if (form) {
        form.addEventListener("submit", function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            responseMsg.innerHTML = `
                <div class="text-info">
                    <span class="spinner-border spinner-border-sm"></span> Sending...
                </div>
            `;

            fetch("save_contact.php", { method: "POST", body: formData })
                .then(res => res.json())
                .then(data => {
                    if (data.status === "success") {
                        responseMsg.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                        form.reset();
                        showToast(data.message, "success");
                    } else {
                        responseMsg.innerHTML = `<div class="alert alert-warning">${data.message}</div>`;
                        showToast(data.message, "warning");
                    }
                })
                .catch(() => showToast("Server error. Please try again.", "danger"));
        });
    }
});

// Dark mode toggle
function toggleDark() {
    document.body.classList.toggle("bg-dark");
    document.body.classList.toggle("text-light");
    document.body.classList.toggle("bg-light");
    document.body.classList.toggle("text-dark");

    document.querySelectorAll(".card").forEach(card => {
        card.classList.remove("bg-dark", "text-light", "bg-light", "text-dark");
        card.classList.toggle("bg-dark");
        card.classList.toggle("text-light");
    });
}

// Bootstrap toast popup
function showToast(message, type = "success") {
    let toastContainer = document.getElementById("toastContainer");
    if (!toastContainer) {
        toastContainer = document.createElement("div");
        toastContainer.id = "toastContainer";
        toastContainer.classList.add("position-fixed", "top-0", "end-0", "p-3");
        document.body.appendChild(toastContainer);
    }

    const toastHTML = `
    <div class="toast align-items-center text-bg-${type} border-0 mb-2" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">${message}</div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>`;

    toastContainer.insertAdjacentHTML("beforeend", toastHTML);
    const toastEl = toastContainer.querySelector(".toast:last-child");
    const toast = new bootstrap.Toast(toastEl);
    toast.show();
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) target.scrollIntoView({ behavior: "smooth" });
    });
});