const sidebar = document.querySelector(".sidebar");
const sidebarToggler = document.querySelector(".sidebar-toggler");

// Toggle sidebar collapsed state
sidebarToggler.addEventListener("click", () => {
    sidebar.classList.toggle("collapsed");
});

// Highlight current page in navigation
document.addEventListener("DOMContentLoaded", () => {
    const currentPage = window.location.pathname.split("/").pop() || "index.html";
    const currentLink = document.querySelector(`.nav-link[href="${currentPage}"]`);
    if (currentLink) {
        currentLink.classList.add("active");
    }
});

