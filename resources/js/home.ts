document.addEventListener('DOMContentLoaded', () => {

// open and close comments section ----start  

let close_comment=document.getElementById("close-comment");
let comment_section=document.getElementById("comment-section");
let comment_icon=document.getElementById('comment-icon');

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

//show-hide sidemenu on small screen --start
let burger_menu_icon=document.getElementById('burger-menu-icon');
let sidemenu=document.getElementById('sidemenu');
let main=document.getElementById('main');
let menuLinks=document.querySelectorAll('.menuLinks')
const backdrop = document.querySelector('#backdrop');
const body=document.querySelector('.body');

const toggleMenu = (isOpen: boolean) => {
    if (isOpen) {
        sidemenu?.classList.remove('hidden');
        sidemenu?.classList.add('flex');
        backdrop?.classList.remove('hidden');
        // Disable scrolling on main page while menu is open
        body?.classList.add('overflow-hidden');
    } else {
        sidemenu?.classList.add('hidden');
        sidemenu?.classList.remove('flex');
        backdrop?.classList.add('hidden');
        burger_menu_icon?.classList.remove('hidden');
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
       
    });
});

//show-hide sidemenu on small screen --end

// creating  post
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

// whipe successfull publication alert message 
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
const publication_section=document.getElementById('quick-share');
const file_cont=document.getElementById('img-cont');

if (fileInput && fileNameDisplay && fileSubtext) {
    fileInput.addEventListener('change', () => {
        if (fileInput.files && fileInput.files.length > 0) {
            // Get the name of the first file
            const name = fileInput.files[0].name;
            
            // Update the UI
            fileNameDisplay.innerText = "File Selected:";
            fileSubtext.innerText = name;
            fileSubtext.classList.add('text-[#C8A35C]', 'font-semibold'); // Add a highlight color
            publication_section?.classList.remove('w-[90%]');
            publication_section?.classList.add('max-md:w-[70%]');

            file_cont?.classList.toggle('border');
        }
    });
}


//Delete post

interface DeleteResponse {
    success: boolean;
    message?: string;
}

const deleteActivity = (pubId: string): void => {
    if (!confirm('Are you sure you want to delete this activity?')) return;

    const csrfToken = (document.querySelector('meta[name="csrf-token"]') as HTMLMetaElement | null)?.content;
    if (!csrfToken) return;

    fetch(`/publications/${pubId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then((data: { success: boolean }) => {
        if (data.success) {
            // 1. Target the card in "My Activities"
            const activityCard = document.getElementById(`activity-card-${pubId}`);
            
            // 2. Target the card in the "Community Feed"
            const feedCard = document.getElementById(`feed-card-${pubId}`);

            // helper function to animate and remove
            const animateRemoval = (el: HTMLElement | null) => {
                if (el) {
                    el.style.transition = 'all 0.5s ease';
                    el.style.opacity = '0';
                    el.style.transform = 'scale(0.9)';
                    setTimeout(() => el.remove(), 500);
                }
            };

            animateRemoval(activityCard);
            animateRemoval(feedCard);
        }
    })
    .catch(error => console.error('Error:', error));
};

(window as any).deleteActivity = deleteActivity;


// Edit modal

const editForm = document.getElementById('edit-activity-form') as HTMLFormElement | null;

    editForm?.addEventListener('submit', async (e: Event) => {
        e.preventDefault();

        const submitBtn = editForm.querySelector('button[type="submit"]') as HTMLButtonElement;
        const pubId = (document.getElementById('edit-pub-id') as HTMLInputElement).value;
        const category = (document.getElementById('edit-category') as HTMLSelectElement).value;
        const caption = (document.getElementById('edit-caption') as HTMLTextAreaElement).value;
        const csrfToken = (document.querySelector('meta[name="csrf-token"]') as HTMLMetaElement | null)?.content;

        // Visual feedback: Disable button
        submitBtn.disabled = true;
        submitBtn.innerText = 'Saving...';

        try {
            const response = await fetch(`/publications/${pubId}`, {
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': csrfToken || '',
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    pub_category: category,
                    pub_caption: caption
                })
            });

            const data = await response.json();

            if (data.success) {
                // Update UI in both locations
                updateElementContent(`activity-card-${pubId}`, category, caption, true);
                updateElementContent(`feed-card-${pubId}`, category, caption, false);
                
                closeEditModal();
            } else {
                alert('Update failed on the server.');
            }
        } catch (err) {
            console.error('Edit error:', err);
            alert('An error occurred. Check the console.');
        } finally {
            // Restore button
            submitBtn.disabled = false;
            submitBtn.innerText = 'Save Changes';
        }
    });



})

//Edit modal
function updateElementContent(cardId: string, category: string, caption: string, isActivity: boolean): void {
    const card = document.getElementById(cardId);
    if (!card) return;

    const catEl = card.querySelector('.card-cat');
    // Activities use p.py-6, Community Feed uses .card-caption (based on our previous cards)
    const capEl = isActivity ? card.querySelector('p.py-6') : card.querySelector('.card-caption');

    if (catEl) catEl.textContent = category;
    if (capEl) capEl.textContent = caption;
}

// Kept global for the onclick handlers
(window as any).openEditModal = (pubId: string) => {
    const modal = document.getElementById('edit-modal');
    const card = document.getElementById(`activity-card-${pubId}`);
    if (!modal || !card) return;

    const category = card.querySelector('.card-cat')?.textContent?.trim() || '';
    const caption = card.querySelector('p.py-6')?.textContent?.trim() || '';

    (document.getElementById('edit-pub-id') as HTMLInputElement).value = pubId;
    (document.getElementById('edit-category') as HTMLSelectElement).value = category;
    (document.getElementById('edit-caption') as HTMLTextAreaElement).value = caption;
    

    modal.classList.remove('hidden');
};

(window as any).closeEditModal = () => {
    document.getElementById('edit-modal')?.classList.add('hidden');
};