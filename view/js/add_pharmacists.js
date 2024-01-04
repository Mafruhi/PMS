function validateForm() {
    
    let x = document.forms["ap"]["fname"].value;
    if (x == "") {
      alert("First Name must be filled out");
      return false;
    }

    let y = document.forms["ap"]["lname"].value;
    if (y == "") {
      alert("Last Name must be filled out");
      return false;
    }

    let z = document.forms["ap"]["gender"].value;
    if (z == "") {
      alert("Gender must be filled out");
      return false;
    }

    let a = document.forms["ap"]["DOB"].value;
    if (a == "") {
      alert("Date Of Birth must be filled out");
      return false;
    }

    let b = document.forms["ap"]["religion"].value;
    if (b == "") {
      alert("Religion must be filled out");
      return false;
    }

    let e = document.forms["ap"]["praddress"].value;
    if (e == "") {
      alert("Present Address must be filled out");
      return false;
    }

    let c = document.forms["ap"]["pmaddress"].value;
    if (c == "") {
      alert("Permanent Address must be filled out");
      return false;
    }

    let d = document.forms["ap"]["phone"].value;
    if (d == "") {
      alert("Phone must be filled out");
      return false;
    }

    let f = document.forms["ap"]["website"].value;
    if (f == "") {
      alert("Website must be filled out");
      return false;
    }

    let i = document.forms["ap"]["username"].value;
    if (i == "") {
      alert("Username must be filled out");
      return false;
    }
  }