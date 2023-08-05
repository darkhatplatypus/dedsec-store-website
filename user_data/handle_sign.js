// Check if an item is existed
function isExist(key) {
    const itemValue = localStorage.getItem(key);
    return itemValue !== null;
  }

// let user = {name: "User1234", password: "1234"}

// Function to check if the user is logged in
function isLoggedIn() {
    const status = localStorage.getItem('isLoggedIn');
    return status === 'true';
}

// Function to handle logout
function logout() {
    // Clear the login status
    localStorage.setItem('isLoggedIn', 'false');
    localStorage.removeItem('current_email');
}

// Function to get the global email
function get_global_email(){
    return localStorage.getItem('current_email');
}

// Function to set the global email
function set_global_email(email){
    return localStorage.setItem('current_email', email);
}



// Function to handle sign up
function signUp(name, email, password) {
    // Check if the email already exists
    if (!localStorage.getItem(email)) 
    {
        // Store the new user in local storage
        const userData = { name, email, password };
        localStorage.setItem(email, JSON.stringify(userData));
        set_global_email(email);

        return true; // Success
    } 
    else
    {
      return false; // Email already taken
    }
}
  
// Function to handle login
function login(email, password) {
    const userDataString = localStorage.getItem(email);
    if (userDataString) 
    {
        const userData = JSON.parse(userDataString);

        if (userData.password === password) {
            // Login successful, set the login status to true
            localStorage.setItem('isLoggedIn', 'true');
            set_global_email(email)
            return true; // Login successful
        }
    }
    return false; // Invalid credentials
}

// Handle sign
const user_name = document.getElementById('user');
const log = document.getElementById('log');

if(!isLoggedIn()){
    user_name.textContent = ''
    log.textContent = 'Log in'
} else{
    
    const global_email = get_global_email();
    const userDataString = localStorage.getItem(global_email);
    const userData = JSON.parse(userDataString);

    user_name.textContent = userData['name']
    log.textContent = 'Log out'
}


const logInLink = document.getElementById('log');
logInLink.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default behavior of navigating to the empty href
  
    if (isLoggedIn()){
        logout();
        user_name.textContent = ''
        log.textContent = 'Log in'
    }
    
    // Redirect to the new target page
    window.location.href = '../sign-in-up/sign.html';
  
});

// Handle form
function ValidateEmail(email) 
{
    let email_regx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return email_regx.test(email);
}

function ValidatePassword(password){
    const length = password.length;
    return (2 <= length) && (length <= 30);
}

function ValidateName(name){
    const length = name.length;
    return (2 <= length) && (length <= 30);
}

//Sign in
document.getElementsByClassName('sign-in-form')[0].addEventListener('submit', (event)=>{

    event.preventDefault();
    const email = document.getElementById('sign-in-email').value;
    const password = document.getElementById('sign-in-password').value;

    if(!ValidateEmail(email)){
        alert("You have entered an invalid email address!");
        return;
    }
    
    if (!ValidatePassword(password)){
        alert("Password must be 2-30 characters!");
        return;
    }

    const successful = login(email, password);
    if(successful){
        alert("Log in successfully");
        window.location.href = '../home/index.html';
        return;
    }

    alert('Wrong email or password!');

    return;    
})


//Sign up
document.getElementsByClassName('sign-up-form')[0].addEventListener('submit', (event)=>{

    event.preventDefault();
    const name = document.getElementById('sign-up-name').value;
    const email = document.getElementById('sign-up-email').value;
    const password = document.getElementById('sign-up-password').value;
    const password_confirm = document.getElementById('sign-up-password-confirm').value;

    if(!ValidateName(name)){
        alert("Name must be 2-30 characters!");
        return;
    }

    if(!ValidateEmail(email)){
        alert("You have entered an invalid email address!");
        return;
    }
    
    if (!ValidatePassword(password)){
        alert("Password must be 2-30 characters!");
        return;
    }

    if (password !== password_confirm){
        alert("The confirmation password must be the same as the password above");
        return
    }

    const successful = signUp(name, email, password);
    if(successful){
        alert("Sign up successfully, Login to the page!");
        return;
    }

    alert('Email existed try another one!');

    return;    
})