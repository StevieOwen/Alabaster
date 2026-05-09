 let btn_update=document.getElementById('update_password')as HTMLInputElement | null;
 let btn_link=document.getElementById('send_link')as HTMLInputElement | null;
 let form=document.getElementById('form') as HTMLFormElement | null;

 let form_reset_password=document.getElementById('form-reset-password') as HTMLFormElement | null;
//change state button send link
form?.addEventListener('submit',(e)=>{
console.log("Submit event triggered");
if (btn_link) {
    // Disable first to prevent double-clicks
    btn_link.disabled = true;
    
    // Change visuals
    btn_link.classList.add('disabled'); 
    btn_link.classList.add('opacity-50', 'cursor-not-allowed');
    btn_link.value = "Checking Email ...";
}

})

//change state button update password
form_reset_password?.addEventListener('submit',(e)=>{
console.log("Submit event triggered");
if (btn_update) {
    // Disable first to prevent double-clicks
    btn_update.disabled = true;
    
    // Change visuals
    btn_update.classList.add('disabled'); 
    btn_update.classList.add('opacity-50', 'cursor-not-allowed');
    btn_update.value = "Updating pasword ...";
}

})




// show and hide password
let toggle_pwd=document.getElementById('toggle-pwd');
let pwd=document.getElementById('pwd');
const slashPath = document.querySelector<SVGPathElement>('#eye-slash-path');
let isPasswordVisible = false;

toggle_pwd?.addEventListener('click',(e)=>{
    e.preventDefault();
    isPasswordVisible = !isPasswordVisible;

        if (isPasswordVisible) {
            // Switch to Text mode
            pwd?.setAttribute('type', 'text');
            // Show the slash line
            slashPath?.classList.remove('hidden');
        } else {
            // Switch to Password mode
            pwd?.setAttribute('type', 'password');
            // Hide the slash line
            slashPath?.classList.add('hidden');
        }

})

    
// show/hide password confirmation
let toggle_pwd1=document.getElementById('toggle-pwd1');
let pwdconf=document.getElementById('pwd_confirmation');
const slashPath1 = document.querySelector<SVGPathElement>('#eye-slash-path1');
let isPasswordVisible1 = false;

toggle_pwd1?.addEventListener('click',(e)=>{
    e.preventDefault();
    isPasswordVisible1 = !isPasswordVisible1;

        if (isPasswordVisible1) {
            // Switch to Text mode
            pwdconf?.setAttribute('type', 'text');
            // Show the slash line
            slashPath1?.classList.remove('hidden');
        } else {
            // Switch to Password mode
            pwdconf?.setAttribute('type', 'password');
            // Hide the slash line
            slashPath1?.classList.add('hidden');
        }

})