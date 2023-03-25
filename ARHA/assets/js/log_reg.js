document.getElementById("register").addEventListener("submit", function(event) {});

function registerUser() {
  // Get form input values
  var name = document.getElementById("name").value.trim();
  var email = document.getElementById("email_regis").value.trim();
  var password = document.getElementById("passwordRegis").value.trim();
  var confirmPassword = document.getElementsByName("confirm_password")[0].value.trim();
  var agreeCheckbox = document.getElementById("chkAgree");

  // Validate input values
  if (name === "") {
    alert("Silakan masukkan nama lengkap Anda");
    return false;
  }

  if (email === "") {
    alert("Masukkan alamat email Anda");
    return false;
  }

  if (!validateEmail(email)) {
    alert("Silakan isi alamat email");
    return false;
  }

  if (password === "") {
    alert("Masukkan kata sandi");
    return false;
  }

  if (password !== confirmPassword) {
    alert("Sandi tidak cocok !");
    return false;
  }

  if (!agreeCheckbox.checked) {
    alert("Harap Setuju dengan Syarat dan Ketentuan");
    return false;
  }

  // Get existing user data from localStorage
  var existingData = JSON.parse(localStorage.getItem("userData"));
  var userDataArray = [];

  if (existingData !== null && Array.isArray(existingData)) {
    userDataArray = existingData;
  }

  var userData = {
    name: name,
    email: email,
    password: password
  };

  userDataArray.push(userData);

  localStorage.setItem("userData", JSON.stringify(userDataArray));
  alert("Registrasi Berhasil!");
  window.location.href = "index.php";
}

function validateEmail(email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}

document.getElementById("chkAgree").addEventListener("change", function() {
  if (this.checked) {
    document.getElementById('btnSubmit').style = 'background: linear-gradient(to right, #FA4B37, #DF2771);';
  }
  else{
    document.getElementById('btnSubmit').style = 'background: lightgray;';
  }
});

document.getElementById("login").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevents the form from submitting normally
  
  // Call loginUser() function to handle form submission
  loginUser();
});

function loginUser() {
  // Get form input values
  var email = document.getElementById("email_login").value.trim();
  var password = document.getElementById("passwordLogin").value.trim();

  // Get existing user data from localStorage
  var existingData = JSON.parse(localStorage.getItem("userData"));

  // Check if user data exists in localStorage
  if (existingData !== null && Array.isArray(existingData)) {
    // Check if email and password match with the user data in localStorage
    var matchedUser = existingData.find(function(user) {
      return user.email === email && user.password === password;
    });

    if (matchedUser) {
      // Store the currently logged-in user's email in localStorage
      localStorage.setItem("loggedInUser", JSON.stringify({ email: email }));
      
      // Redirect to home.php if login is successful
      window.location.href = "home.php";
    } else {
      alert("Email atau kata sandi salah !");
    }
  } else {
    alert("Tidak ada data pengguna yang ditemukan. Silakan mendaftar!");
  }
}

function google() {

  	window.location.assign("https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue&csig=AF-SEnbZHbi77CbAiuHE%3A1585466693&flowName=GlifWebSignIn&flowEntry=AddSession", "_blank");

}

function updateGreeting() {
  // Retrieve the user's name from localStorage
  var userData = JSON.parse(localStorage.getItem("userData"));
  var name = userData ? userData[0].name : "";

  // Update the HTML with the user's name
  var greeting = document.getElementById("user-name");
  greeting.innerHTML = name;
}

window.addEventListener("load", updateGreeting);
