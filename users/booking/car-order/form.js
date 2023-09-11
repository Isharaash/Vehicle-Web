function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } 
    else {
      x.className = "topnav";
    }
}


function validateForm() {
    let fullname = document.forms["form"]["fullname"].value;
    let email = document.forms["form"]["email"].value;
    let phone = document.forms["form"]["phone"].value;
    let city = document.forms["form"]["city"].value;
    let address = document.forms["form"]["address"].value;
    let model = document.forms["form"]["model"].value;


    if (fullname == "") {
      alert("Name must be filled out");
      return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    if (phone == "") {
        alert("Phone must be filled out");
        return false;
    }
    if (city == "") {
        alert("City must be filled out");
        return false;
    }
    if (address == "") {
        alert("Address must be filled out");
        return false;
    }
    if (model == "") {
        alert("Car Model must be filled out");
        return false;
    }
}

