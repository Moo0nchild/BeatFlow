// This is a Test, not 100% finished :c
// class user {
//     constructor(user, email, password) {
//         this.user = user
//         this.email = email
//         this.password = password
//     }
//     set setEmail(email) {
//         this.email = email
//     }
//     set setPassword(password) {
//         this.password = password
//     }
//     set setUser(user) {
//         this.user = user
//     }
//     get getEmail() {
//         return this.email
//     }
//     get getPassword() {
//         return this.password
//     }
//     get getUser() {
//         return this.user
//     }
// }





// function exist(email, password) {
//     for (let i = 0; i < list.length; i++) {
//         if(list[i].getEmail === email && list[i].getPassword === password) {
//             let person = list[i]
//             return person
//         }
//     }
//     return null
// }

const email = document.getElementById("email-user")
const password = document.getElementById("password-user")
// const form = document.getElementById("form")

// This method is used to validate the user's email and password, and display the Username in the Home Page 

// document.getElementById("form").addEventListener("submit", function(event) {
//     event.preventDefault(); // Prevent Page from Reloading 
//     let person = exist(email.value, password.value)
//     if(person !== null) {
//         window.location.href = "../Home Page/Home.html?email=" + encodeURIComponent(person.getUser)
//     }
//     else {
//         alert("Oops! Incorrect Username or Password.")
//     }
// })

function SeePassword(){
    if(password.type==="text"){
        icon.name="eye-off-outline"
        password.type="password"
    }else {
        icon.name="eye-outline"
        password.type="text"
    }
}








