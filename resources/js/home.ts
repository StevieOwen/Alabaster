document.addEventListener('DOMContentLoaded', () => {

    
let close_comment=document.getElementById("close-comment");
let comment_section=document.getElementById("comment-section");
let comment_icon=document.getElementById('comment-icon');

// open and close comments section ----start

close_comment?.addEventListener('click',(e)=>{
    e.preventDefault();

    comment_section?.classList.add("hidden")
})

comment_icon?.addEventListener('click',(e)=>{
    e.preventDefault();
    comment_section?.classList.remove("hidden")
})
//open and close comments section -----end


// switching section based on the Sidemenu --start

const navLinks = document.querySelectorAll<HTMLAnchorElement>('[data-target]');
    const sections = document.querySelectorAll('section');

    navLinks.forEach(link => {
        link.addEventListener('click', (e: MouseEvent) => {
            e.preventDefault();

            const targetId = link.getAttribute('data-target');
            if (!targetId) return;

            // 1. Update Section Visibility
            sections.forEach(section => {
                if (section.id === targetId) {
                    section.classList.remove('hidden');
                    // section.classList.add('block');
                } else {
                    section.classList.add('hidden');
                    section.classList.remove('block');
                }
            });

            // 2. Update Sidebar Styling (Active State)
            navLinks.forEach(l => {
                l.classList.remove('active');
                // Add your default inactive classes back if necessary
            });
            
            link.classList.add('active');
        });
    });


// switching section based on the Sidemenu --end

//show-hide sidemenu on small scree --start
let burger_menu_icon=document.getElementById('burger-menu-icon');
let sidemenu=document.getElementById('sidemenu');
let main=document.getElementById('main');
let menuLinks=document.querySelectorAll('.menuLinks')
const backdrop = document.querySelector('#backdrop');

const toggleMenu = (isOpen: boolean) => {
    if (isOpen) {
        sidemenu?.classList.remove('hidden');
        sidemenu?.classList.add('flex');
        backdrop?.classList.remove('hidden');
        // Disable scrolling on main page while menu is open
        document.body.style.overflow = 'hidden';
    } else {
        sidemenu?.classList.add('hidden');
        sidemenu?.classList.remove('flex');
        backdrop?.classList.add('hidden');
        // Re-enable scrolling
        document.body.style.overflow = 'auto';
    }
};

// Open Menu
burger_menu_icon?.addEventListener('click', (e) => {
    e.preventDefault();
    toggleMenu(true);
    burger_menu_icon?.classList.add('hidden');
});

// Close Menu when clicking the Backdrop
backdrop?.addEventListener('click', () => toggleMenu(false));

// Close Menu when a link is clicked
menuLinks.forEach(link => {
    link.addEventListener('click', () => {
        // Your section switching logic here...
        toggleMenu(false); 
        burger_menu_icon?.classList.remove('hidden');
    });
});

//show-hide sidemenu on small scree --end


const publication_form=document.getElementById('publication-form') as HTMLButtonElement | null;
const publish_btn=document.getElementById('publish-btn') as HTMLFormElement | null;

publication_form?.addEventListener('submit',(e)=>{
    console.log("Submit event triggered");
  if (publish_btn) {
        // Disable first to prevent double-clicks
        publish_btn.disabled = true;
        
        // Change visuals
        publish_btn.classList.add('disabled'); 
        publish_btn.classList.add('opacity-50', 'cursor-not-allowed');
        publish_btn.value = "Verifying Credentials...";
    }

})

// whipe successfull publication created
let pub_status=document.getElementById('pub_status') ;

if (pub_status) {
    setTimeout(() => {
        pub_status.style.opacity = '0';
        setTimeout(() => pub_status.remove(), 500); // Fade out and remove
    }, 2000);
}


// show file name when selected
const fileInput = document.getElementById('file-upload') as HTMLInputElement | null;
const fileNameDisplay = document.getElementById('file-name');
const fileSubtext = document.getElementById('file-subtext');

if (fileInput && fileNameDisplay && fileSubtext) {
    fileInput.addEventListener('change', () => {
        if (fileInput.files && fileInput.files.length > 0) {
            // Get the name of the first file
            const name = fileInput.files[0].name;
            
            // Update the UI
            fileNameDisplay.innerText = "File Selected:";
            fileSubtext.innerText = name;
            fileSubtext.classList.add('text-[#C8A35C]', 'font-semibold'); // Add a highlight color
        }
    });
}


















})