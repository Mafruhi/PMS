function validateForm() {
    
    let x = document.forms["med"]["name"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }

    let y = document.forms["med"]["price"].value;
    if (y == "") {
      alert("Price must be filled out");
      return false;
    }
  }