
const sidebarItems = document.querySelectorAll(".sidebar li");

sidebarItems.forEach(item => {
    item.addEventListener("click", () => {
        document.querySelector(".sidebar li.active").classList.remove("active");
        item.classList.add("active");
    });
});

document.querySelector(".add-funds").addEventListener("click", (event) => {
    event.preventDefault();
    alert("Add Funds feature is currently unavailable.");
});
function prevReview() {
    currentIndex = (currentIndex === 0) ? reviews.length - 1 : currentIndex - 1;
    updateReview(currentIndex);
}

function nextReview() {
    currentIndex = (currentIndex === reviews.length - 1) ? 0 : currentIndex + 1;
    updateReview(currentIndex);
}