const form = document.querySelector(".form");
form.addEventListener("submit", function (e) {
  e.preventDefault();

  const name = form.querySelector('input[type="text"]').value.trim();
  const email = form.querySelector('input[type="email"]').value.trim();
  const password = form.querySelector('input[type="password"]').value;

  if (!name || !email || !password) {
    alert("Please fill in all fields.");
    return;
  }


  // For now, just submit the form:
  form.submit();
});