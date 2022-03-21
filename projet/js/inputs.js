const add = document.querySelector('.formulaire')
const form = document.getElementById('form')
const password = document.getElementById('password')
const confirm = document.getElementById('confirmpassword')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e)=>{
            let message = []
            if (fname.value === '' || fname.value == null ){
                message.push("First name is required")
                errorElement.style.display = "block" ;
            }
            
            if (lname.value === '' || lname.value == null ){
                message.push("Last name is required")
                errorElement.style.display = "block" ;
            }
        
            if (email.value === '' || email.value == null ){
                message.push("Email is required")
                errorElement.style.display = "block" ;
            }

            
            if (password.value === '' || password.value == null ){
                message.push("Password is required")
                errorElement.style.display = "block" ;
            }else if(password.value.length<=6){
                message.push("Password must be more than 6 charachters")
                errorElement.style.display = "block" ;
            }
            
            if (confirmpassword.value === '' || confirmpassword.value == null ){
                message.push("Password confirmation is required")
                errorElement.style.display = "block" ;
            }
            
            if(password.value !== confirmpassword.value){
                message.push("Your password doesn't match with the password confirmation")
                errorElement.style.display = "block" ;
            }    
            if(message.length>0){
                e.preventDefault();
                errorElement.innerHTML= message.join(',')
            }
    
})
