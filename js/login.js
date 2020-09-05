function validateForm() {
    var email = document.forms["login"]["email"].value;
    var uname = document.forms["login"]["uname"].value;
    var pwd = document.forms["login"]["pwd"].value;
    var repwd = document.forms["login"]["repwd"].value;

    if (email == "") {
        alert("E-mail must be filled out");
        return false;
    }
    if (uname == "") {
        alert("Username must be filled out");
        return false;
    }
    if (pwd == "") {
        alert("Password must be filled out");
        return false;
    }
    if (repwd == "") {
        alert("Repeat password must be filled out");
        return false;
    }
}