// --- Modal JS ---
const modal = document.getElementById("editModal");
const cancelBtn = document.getElementById("cancelBtn");
const openBtns = document.querySelectorAll(".openModalBtn");

// Open modal when Edit button clicked
openBtns.forEach((btn) => {
  btn.addEventListener("click", function (e) {
    e.preventDefault();

    // Get data from button
    const id = this.getAttribute("data-id");
    const title = this.getAttribute("data-title");
    const desc = this.getAttribute("data-desc");

    // Fill modal form
    document.getElementById("editId").value = id;
    document.getElementById("editTitle").value = title;
    document.getElementById("editDesc").value = desc;

    // Show modal
    modal.style.display = "block";
  });
});

// Close modal on cancel
cancelBtn.onclick = () => {
  modal.style.display = "none";
};

// Close modal when clicking outside
window.onclick = (e) => {
  if (e.target == modal) {
    modal.style.display = "none";
  }
};
