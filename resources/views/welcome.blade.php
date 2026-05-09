<x-layout>
<title>Alabaster & Ochre</title>
<header class="text-[Montserrat] bg-[#EDE6E0] border-b border-b-[#3d3d3d] fixed w-full">
    <nav class="flex justify-between items-center mx-4 p-4 ">
        <h2 class="logo cursor-pointer">Alabaster & Ochre</h2>
        <ul class="flex space-x-6 items-center text-[min(1.3vw,100px)]">
            <li class=" cursor-pointer hover:bg-[#B8CCC1] px-4  py-2 rounded-[12px] "><a href="/signin">Log In</a> </li>
            <li class="signup-button"><a href="/signup">Sign Up</a></li>
        </ul>
    </nav>
</header>
<main  class="bg-[#EDE6E0] " >
    <div class="flex flex-col items-center space-y-10 py-42">
        <h1  class="text-[#B7A54F] text-[min(5vw,250px)] font-bold">Document Your Moments</h1>
        <p class="text-[#6b6b6b] text-center text-[min(2vw,250px)] max-sm:text-center">A community for sharing quick snapshots of your travels, <br> events, and daily discoveries.</p>
        <button class="button-join"> <a href="/signup">Join the Community</a></button>
    </div>

    {{-- <div class="">
        <h4>Alabaster & Ochre</h4>
        <div>
            <img class="max-w-[20%]" src="{{ Storage::url('uploads/karlone.jpeg') }}" alt="">
             <div class="p-2 flex flex-col space-y-2 " >

             </div>
        </div>
        
    </div> --}}
</main>

<section>
    <div class="py-25" >
        <h4 class="text-center text-[min(3vw,150px)] text-[#3d3d3d]  font-bold">How It Works</h4>
        <div class="mt-6 flex space-x-6 justify-center max-sm:flex-col  max-sm:space-y-6  max-sm:space-x-0 max-sm:items-center max-sm:justify-center ">
            <div class="card">
                <div class="mb-4 mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-camera h-7 w-7 text-mint" aria-hidden="true">
                    <path d="M13.997 4a2 2 0 0 1 1.76 1.05l.486.9A2 2 0 0 0 18.003 7H20a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h1.997a2 2 0 0 0 1.759-1.048l.489-.904A2 2 0 0 1 10.004 4z"></path><circle cx="12" cy="13" r="3"></circle></svg>
                </div>
                <h5 >Capture the moment</h5>
                <p class="card-text">Snap a photo and write a quick <br> caption to preserve your <br> experience.</p>
            </div>

            <div class="card">
                <div class="mb-4 mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share2 lucide-share-2 h-7 w-7 text-mint" aria-hidden="true">
                    <circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" x2="15.42" y1="13.51" y2="17.49"></line><line x1="15.41" x2="8.59" y1="6.51" y2="10.49"></line></svg>
                </div>
                <h5>Share the vibe</h5>
                <p class="card-text">Post to your feed and let your <br> community see what you're up <br> to.</p>
            </div>

            <div class="card">
                <div class="mb-4 mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-compass h-7 w-7 text-mint" aria-hidden="true">
                    <path d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z">
                    </path><circle cx="12" cy="12" r="10"></circle></svg>
                </div>
                <h5>Discover Others</h5>
                <p class="card-text">Explore activities from people <br> around the world and find new <br> inspiration.</p>
            </div>

        </div>
    </div>
    
</section>

<footer class="bg-[#EDE6E0] py-6"> <p class="text-center text-[#6b6b6b]"> © 2026 Alabaster & Ochre. All rights reserved.</p></footer>

</x-layout>