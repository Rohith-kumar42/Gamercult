// function validateForm() 
// {
//     let x = document.forms["myForm"]["uname"].value;
//     if (x == "")
//     {
//       alert("Username must be filled out");
      
//       return false;
//     }

//     // let y = document.forms["myForm"]["psw"].value;
//     // if (y == "")
//     // {
//     //     alert("Password must be filled out");
//     //     return false;
//     // }
//     let y = document.forms["myForm"]["psw"].value;
//     let error = document.getElementById("error-message");
    
//     if (y == "") {
//         error.textContent = "Password cannot be empty. Please enter a password.";
//         error.style.color = "red";
//         // You can add additional code here, such as preventing form submission:
//          return false;
//     }
//   }
function errormessage() {
  let username = document.getElementById("uname").value;
  let password = document.getElementById("psw").value;
  let usernameError = document.getElementById("error1");
  let passwordError = document.getElementById("error");

  // Reset previous error messages
  usernameError.textContent = "";
  passwordError.textContent = "";
  
  // Check for empty username
  if (username == ""|| username.length < 5) {
      
    
      usernameError.textContent = "Please enter a username.\n";
      usernameError.style.color = "#1999ff";
      usernameError.style.fontWeight = "bold";
      return false; // Prevent form submission
  }
  if (/^\d+$/.test(username)) {
    usernameError.textContent = "Username cannot contain only numbers.\n"; // Add new line
    usernameError.style.color = "#1999ff";
    usernameError.style.fontWeight = "bold";
    return false; // Prevent form submission
}
if (username.startsWith(" ")) {
  usernameError.textContent = "Username cannot start with a space.\n"; // Add new line
  usernameError.style.color = "#1999ff";
  usernameError.style.fontWeight = "bold";
  return false; // Prevent form submission
}
  // Check for empty password
  if (password == "") {
      passwordError.textContent = "Please enter a password.\n";
      passwordError.style.color = "#1999ff";
      usernameError.style.fontWeight = "bold";
      return false; // Prevent form submission
  }

  // If all validations pass, allow form submission
  return true;
}



	

