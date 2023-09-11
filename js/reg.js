function validateForm() {
    let fName = document.forms["form"]["fullname"].value;
    let email = document.forms["form"]["email"].value;
    let username = document.forms["form"]["username"].value;
    let password = document.forms["form"]["password"].value;
    if (fName == "") {
      alert("Name must be filled out");
      return false;
    }
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    
    if (username == "") {
        alert("Username must be filled out");
        return false;
    }
    if (password == "") {
        alert("Password must be filled out");
        return false;
    }
}