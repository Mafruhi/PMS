function validateForm() {
    
    let x = document.forms["addingcash"]["fname"].value;
    if (x == "") {
      alert("First Name must be filled out");
      return false;
    }

    let y = document.forms["addingcash"]["lname"].value;
    if (y == "") {
      alert("Last Name must be filled out");
      return false;
    }

    let z = document.forms["addingcash"]["gender"].value;
    if (z == "") {
      alert("Gender must be filled out");
      return false;
    }

    let a = document.forms["addingcash"]["DOB"].value;
    if (a == "") {
      alert("Date Of Birth must be filled out");
      return false;
    }

    let b = document.forms["addingcash"]["religion"].value;
    if (b == "") {
      alert("Religion must be filled out");
      return false;
    }

    let e = document.forms["addingcash"]["praddress"].value;
    if (e == "") {
      alert("Present Address must be filled out");
      return false;
    }

    let c = document.forms["addingcash"]["pmaddress"].value;
    if (c == "") {
      alert("Permanent Address must be filled out");
      return false;
    }

    let d = document.forms["addingcash"]["phone"].value;
    if (d == "") {
      alert("Phone must be filled out");
      return false;
    }

    let f = document.forms["addingcash"]["website"].value;
    if (f == "") {
      alert("Website must be filled out");
      return false;
    }

    let i = document.forms["addingcash"]["username"].value;
    if (i == "") {
      alert("Username must be filled out");
      return false;
    }

    let g = document.forms["addingcash"]["password"].value;
    if (g == "") {
      alert("Password must be filled out");
      return false;
    }

    let h = document.forms["addingcash"]["confirmpassword"].value;
    if (h == "") {
      alert("Confirm Password must be filled out");
      return false;
    }
  }