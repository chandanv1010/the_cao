document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".voucher-card");
    const notePanel = document.querySelectorAll(".note-panel");
    const orderPanel = document.querySelectorAll(".order-panel");
    const accountInput = document.getElementById("account_garena");

    cards.forEach((card) => {
        card.addEventListener("click", function () {
            cards.forEach((c) => c.classList.remove("active"));
            this.classList.add("active");
            notePanel.forEach((p) => (p.style.display = "none"));
            orderPanel.forEach((p) => (p.style.display = "block"));

            let price = this.querySelector(".voucher-price").innerText;
            const activeTab = document.querySelector(".uk-tab .uk-active a");
            let productName = "Mua mã thẻ Garena";

            if (activeTab && activeTab.textContent.includes("NẠP SÒ")) {
                productName = "Nạp trực tiếp vào tài khoản";
            }
            let accountName = accountInput ? accountInput.value : "";
            if (!accountName) {
                accountName = "xxxxxxx";
            }

            document.getElementById("order-name").innerText = productName;
            document.getElementById("order-price").innerText = price;
            document.getElementById("order-qty").innerText = "1";
            document.getElementById("order-account").innerText = accountName;
            document.getElementById("order-total").innerText = price;
        });
    });

    if (accountInput) {
        accountInput.addEventListener("input", function () {
            let accountName = this.value || "xxxxxxx";
            document.getElementById("order-account").innerText = accountName;
        });
    }
    const tabLinks = document.querySelectorAll(".uk-tab a");
    tabLinks.forEach((link) => {
        link.addEventListener("click", function () {
            cards.forEach((c) => c.classList.remove("active"));
            notePanel.forEach((p) => (p.style.display = "block"));
            orderPanel.forEach((p) => (p.style.display = "none"));
        });
    });
});
