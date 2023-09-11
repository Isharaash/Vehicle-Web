function validateForm() {
    let name = document.forms["form"]["name"].value;
    let email = document.forms["form"]["email"].value;
    let phone = document.forms["form"]["phone"].value;
    let address = document.forms["form"]["address"].value;
    let location = document.forms["form"]["location"].value;
    let guests = document.forms["form"]["guests"].value;
    let arrivals = document.forms["form"]["arrivals"].value;
    let leaving = document.forms["form"]["leaving"].value;


    if (name == "") {
      alert("Name must be filled out");
      return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    if (phone == "") {
        alert("phone must be filled out");
        return false;
    }
    if (address == "") {
        alert("address must be filled out");
        return false;
    }
    if (location == "") {
        alert("location must be filled out");
        return false;
    }
    if (guests == "") {
        alert("guests must be filled out");
        return false;
    }
    if (arrivals == "") {
        alert("arrivals must be filled out");
        return false;
    }
    if (leaving == "") {
        alert("leaving must be filled out");
        return false;
    }
}