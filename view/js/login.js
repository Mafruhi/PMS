function validateForm() {
    
    let x = document.forms["loginForm"]["username"].value;
    if (x == "") {
      alert("Username must be filled out");
      return false;
    }

    let y = document.forms["loginForm"]["password"].value;
    if (y == "") {
      alert("password must be filled out");
      return false;
    }
  }