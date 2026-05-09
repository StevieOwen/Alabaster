let toggle_pwd=document.getElementById('toggle-pwd');
let pwd=document.getElementById('pwd');
const slashPath = document.querySelector<SVGPathElement>('#eye-slash-path');
let isPasswordVisible = false;


// show and hide password
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
let pwdconf=document.getElementById('pwdconf');
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


const btn_create_account = document.getElementById('btn-create-account') as HTMLInputElement | null;
const form = document.getElementById('registration') as HTMLFormElement | null;


form?.addEventListener('submit',(e)=>{
    console.log("Submit event triggered");
  if (btn_create_account) {
        // Disable first to prevent double-clicks
        btn_create_account.disabled = true;
        
        // Change visuals
        btn_create_account.classList.add('disabled'); 
        btn_create_account.classList.add('opacity-50', 'cursor-not-allowed');
        btn_create_account.value = "Creating Account ...";
    }


})

