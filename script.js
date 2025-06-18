
document.addEventListener("DOMContentLoaded", function () {
  fetch("backend/data.php")
    .then((res) => res.json())
    .then((data) => {
      const list = document.getElementById("teacher-list");
      data.forEach((t) => {
        const div = document.createElement("div");
        div.innerHTML = `<strong>${t.Name}</strong> - ${t.Subject} - ${t.Phone} - ${t.Email}`;
        list.appendChild(div);
      });
    });

  const form = document.getElementById("add-form");
  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      const formData = new FormData(form);
      fetch("backend/save.php", {
        method: "POST",
        body: formData,
      }).then(() => location.reload());
    });
  }
});
