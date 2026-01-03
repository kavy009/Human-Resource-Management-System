function confirmLogout(){
    return confirm("Are you sure you want to logout?");
}

/* ===== FORM VALIDATION ===== */
function validateRegister(){
    let email = document.getElementById("email").value;
    let pass = document.getElementById("password").value;

    if(!email.includes("@")){
        alert("Invalid email address");
        return false;
    }

    if(pass.length < 6){
        alert("Password must be at least 6 characters");
        return false;
    }
    return true;
}

function validateLeave(){
    let from = document.getElementById("from").value;
    let to = document.getElementById("to").value;

    if(from === "" || to === ""){
        alert("Select leave dates");
        return false;
    }

    if(from > to){
        alert("From date cannot be after To date");
        return false;
    }
    return true;
}
