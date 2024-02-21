function closeLoginError() {
  document.getElementById('loginError').style.display = 'none';
}
document.addEventListener("DOMContentLoaded", function () {
  const urlParams = new URLSearchParams(window.location.search);
  const pesan = urlParams.get("pesan");

  if (pesan === "berhasil_login") {
    showAlert("success", "Login successful. Welcome!");
  } else if (pesan === "gagal_login") {
    showAlert("error", "Username or password not valid. Please try again.");
  } else if (pesan === "berhasil_daftar") {
    showAlert("success", "Registration successful. Please log in.");
  } else if (pesan === "gagal_daftar") {
    showAlert("error", "Registration failed. Please try again.");
  }
});

function showAlert(type, message) {
  alert(message); 
}
