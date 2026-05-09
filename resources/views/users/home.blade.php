<x-layout>
<title>Home | Alabaster & Ochre</title>
<div class="bg-[#EDE6E0] flex space-x-15 min-h-screen ">
    <div id="backdrop" class="fixed ml-64 inset-0 bg-black/50 z-40 w-full hidden md:hidden"></div>
    <aside id="sidemenu" class="hidden z-50 md:fixed md:flex left-0 flex-col p-8  border-r-[1px] border-[#6b6b6b] w-64 h-screen top-0">
        <div class="flex-none">
            <header class="mb-6">
                <h4 class="whitespace-nowrap text-[#B7A54F] text-2xl  font-bold ">Alabaster & Ochre</h4>
            </header>

            <ul class="flex flex-col space-y-5 text-[#6b6b6b]  ">
                <li><a data-target="community-feed" href="" class="menuLinks flex space-x-2 active"><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d='M5.75 7.5A2.25 2.25 0 0 1 9.5 5.823a.75.75 0 0 0 1-1.118 3.75 3.75 0 1 0-5 5.59.75.75 0 0 0 1-1.118A2.24 2.24 0 0 1 5.75 7.5M16 3.75a3.74 3.74 0 0 0-2.5.955.75.75 0 0 0 1 1.118 2.25 2.25 0 0 1 3 3.355.75.75 0 0 0 1 1.117A3.75 3.75 0 0 0 16 3.75'/>
                <path d='M12 6.75a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5m-5.81 7.726a.75.75 0 0 0-.38-1.452c-.97.255-1.836.682-2.474 1.256-.64.575-1.086 1.336-1.086 2.22a.75.75 0 0 0 1.5 0c0-.346.17-.729.59-1.105.42-.378 1.054-.71 1.85-.92m12-1.45a.75.75 0 0 0-.38 1.45c.796.21 1.43.542 1.85.92.42.376.59.76.59 1.105a.75.75 0 0 0 1.5 0c0-.884-.446-1.645-1.086-2.22-.638-.574-1.504-1.001-2.474-1.255M12 15.75c-1.493 0-2.881.362-3.921.986-1.025.615-1.829 1.569-1.829 2.764a.75.75 0 0 0 1.5 0c0-.462.316-1.007 1.1-1.478.77-.462 1.882-.772 3.15-.772s2.38.31 3.15.772c.784.47 1.1 1.017 1.1 1.478a.75.75 0 0 0 1.5 0c0-1.195-.804-2.15-1.829-2.764-1.04-.624-2.428-.986-3.921-.986'/>
                </svg> <span>Community Feed</span></a></li>

                <li><a data-target="quick-share" href="" class="menuLinks flex space-x-2"><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d='M7 8.75a3.25 3.25 0 1 0 2.002 5.81l.068.054 4.73 3.312a3.25 3.25 0 1 0 .617-1.4l-4.479-3.135c.2-.421.312-.893.312-1.391s-.112-.97-.312-1.391l4.48-3.136a3.25 3.25 0 1 0-.617-1.4L9.07 9.387l-.068.053A3.24 3.24 0 0 0 7 8.75'/></svg>
                <span> Quick Share </span></a></li>

                <li><a data-target="my-activities" href="" class="menuLinks flex space-x-2"><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d='M5.25 11.25A.75.75 0 0 1 6 10.5a7.5 7.5 0 0 1 7.5 7.5.75.75 0 0 1-1.5 0 6 6 0 0 0-6-6 .75.75 0 0 1-.75-.75'/><path d='M5.25 6A.75.75 0 0 1 6 5.25 12.75 12.75 0 0 1 18.75 18a.75.75 0 0 1-1.5 0A11.25 11.25 0 0 0 6 6.75.75.75 0 0 1 5.25 6m2.134 10.97a.75.75 0 0 1 0 1.06l-.354.354a.75.75 0 1 1-1.06-1.06l.353-.354a.75.75 0 0 1 1.06 0'/>
                </svg> <span> My Activities</span></a></li>
            </ul>
        </div>
        <div class="mt-auto flex flex-col space-y-4 text-[#6b6b6b]"> 
            <div class="flex space-x-2 items-center">
                <img class="w-[15%] rounded-full " src="{{ Storage::url('uploads/karlone1.jpeg')}}" alt="">
                <span><a class="menuLinks" href="">User Name</a></span>
            </div>

            <div class="flex space-x-2">
                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d='M6.5 3.75c-.526 0-1.25.63-1.25 1.821V18.43c0 1.192.724 1.821 1.25 1.821h6.996a.75.75 0 1 1 0 1.5H6.5c-1.683 0-2.75-1.673-2.75-3.321V5.57c0-1.648 1.067-3.321 2.75-3.321h7a.75.75 0 0 1 0 1.5z'/>
                <path d='M16.53 7.97a.75.75 0 0 0-1.06 0v3.276H9.5a.75.75 0 0 0 0 1.5h5.97v3.284a.75.75 0 0 0 1.06 0l3.5-3.5a.75.75 0 0 0 .22-.532v-.002a.75.75 0 0 0-.269-.575z'/></svg>
                <span>Logout</span>
            </div>
        </div>
    </aside>

    <main id="main" class=" border-l border-[#6b6b6b]  p-2 flex flex-col space-y-6 justify-center md:ml-64">
        <div class=" relative z-10 md:hidden">
            <svg id="burger-menu-icon" width="40" height="40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
            <path d='M4.5 6.5h15M4.5 12h15m-15 5.5h15'/></svg>
        </div>
        

        <section id="community-feed" >
            <header class="mb-6">
                <h4 class="text-[#B7A54F] text-2xl font-bold max-md:text-center"> Community Feed</h4>
            </header>
            <div class= "community-card-cont">
            
                {{-- cards --}}
                <div class="community-card">
                    {{-- card-image --}}
                    <img class="card-img" src="{{ Storage::url('uploads/karlone.jpeg') }}" alt="">
                    <div class="p-2 flex flex-col space-y-2 " >
                        {{-- category --}}
                        <span class="card-cat">Category</span>
                        {{-- caption --}}
                        <p class="card-caption">Morning hike through the misty mountains. Nothing beats these views!</p>
                        <div class='flex space-x-4 mb-4 relative z-10' id="like-comment">
                            <span class='flex'>
                                <svg id="like-icon" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                <path d='M7.75 3.5C5.127 3.5 3 5.76 3 8.547 3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79-.78-1.654-2.39-2.79-4.25-2.79'/>
                                </svg> 
                                <span id="likes-number">5</span>
                            </span>

                            <span class='flex'>
                                <svg id="comment-icon" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                <path d='M12 21a9 9 0 1 0-9-9c0 1.44.338 2.8.94 4.007.453.911-.177 2.14-.417 3.037a1.17 1.17 0 0 0 1.433 1.433c.897-.24 2.126-.87 3.037-.416A9 9 0 0 0 12 21'/>
                                </svg>
                                <span id="comments-number">2</span>
                            </span>
                        </div>
                        <div class='flex space-x-2  items-center'>
                            <img class="w-[10%] rounded-full" src="{{ Storage::url('uploads/karlone.jpeg') }}" alt="">
                            {{-- Post-user-name --}}
                            <span>Karlone</span>
                        </div>
                    </div>
                    {{-- comments section --}}
                    <div id="comment-section"  class="flex flex-col space-y-4 p-3 rounded-b-[12px] bg-[#EDE6E0] w-full hidden">
                        <div class="flex justify-between">
                            <h6>Comments</h6>
                            <span > 
                                <svg id="close-comment" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                <path d='M18 6 6 18M6 6l12 12'/></svg>
                            </span>
                        </div>
                        
                        <div class="flex flex-col space-y-3" id="comments-container">
                            <div class="flex space-x-2">
                                <img class="w-[10%] rounded-full" src="{{ Storage::url('uploads/owen.jpg') }}" alt="">
                                <div class="text-[#6b6b6b] text-[0.8rem] flex flex-col">
                                    <span class="text-[#243837]">User name</span>
                                    <p>This looks amazing! Where is this?</p>
                                </div>
                            </div>
                            
                            <div class='flex space-x-4 mt-4 items-center'>
                                <textarea class=" relative z-10 bg-[#fff] border rounded-[12px] h-15 w-full" placeholder="Add a comment..."  name="comment" id="comment" ></textarea>
                                <span>
                                    <button class="bg-[#C8A35C] rounded-[8px] h-10 w-10 flex justify-center items-center">
                                        <svg class="text-center" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                        <path d='m14 10-3 3m9.288-9.969a.535.535 0 0 1 .68.681l-5.924 16.93a.535.535 0 0 1-.994.04l-3.219-7.242a.54.54 0 0 0-.271-.271l-7.242-3.22a.535.535 0 0 1 .04-.993z'/></svg>
                                    </button>
                                </span>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="community-card">
                    {{-- card-image --}}
                    <img class="card-img" src="{{ Storage::url('uploads/karlone.jpeg') }}" alt="">
                    <div class="p-2 flex flex-col space-y-2 " >
                        {{-- category --}}
                        <span class="card-cat">Category</span>
                        {{-- caption --}}
                        <p class="card-caption">Morning hike through the misty mountains. Nothing beats these views!</p>
                        <div class='flex space-x-4 mb-4'>
                            <span class='flex'>
                                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                <path d='M7.75 3.5C5.127 3.5 3 5.76 3 8.547 3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79-.78-1.654-2.39-2.79-4.25-2.79'/>
                                </svg> 
                                <span>5</span>
                            </span>

                            <span class='flex'>
                                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                <path d='M12 21a9 9 0 1 0-9-9c0 1.44.338 2.8.94 4.007.453.911-.177 2.14-.417 3.037a1.17 1.17 0 0 0 1.433 1.433c.897-.24 2.126-.87 3.037-.416A9 9 0 0 0 12 21'/>
                                </svg>
                                <span>2</span>
                            </span>
                        </div>
                        <div class='flex space-x-2  items-center'>
                            <img class="w-[10%] rounded-full" src="{{ Storage::url('uploads/karlone.jpeg') }}" alt="">
                            {{-- Post-user-name --}}
                            <span>Karlone</span>
                        </div>
                    </div>

                </div>
                
                <div class="community-card">
                    {{-- card-image --}}
                    <img class="card-img" src="{{ Storage::url('uploads/karlone.jpeg') }}" alt="">
                    <div class="p-2 flex flex-col space-y-2 " >
                        {{-- category --}}
                        <span class="card-cat">Category</span>
                        {{-- caption --}}
                        <p class="card-caption">Morning hike through the misty mountains. Nothing beats these views!</p>
                        <div class='flex space-x-4 mb-4'>
                            <span class='flex'>
                                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                <path d='M7.75 3.5C5.127 3.5 3 5.76 3 8.547 3 14.125 12 20.5 12 20.5s9-6.375 9-11.953C21 5.094 18.873 3.5 16.25 3.5c-1.86 0-3.47 1.136-4.25 2.79-.78-1.654-2.39-2.79-4.25-2.79'/>
                                </svg> 
                                <span>5</span>
                            </span>

                            <span class='flex'>
                                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                                <path d='M12 21a9 9 0 1 0-9-9c0 1.44.338 2.8.94 4.007.453.911-.177 2.14-.417 3.037a1.17 1.17 0 0 0 1.433 1.433c.897-.24 2.126-.87 3.037-.416A9 9 0 0 0 12 21'/>
                                </svg>
                                <span>2</span>
                            </span>
                        </div>
                        <div class='flex space-x-2  items-center'>
                            <img class="w-[10%] rounded-full" src="{{ Storage::url('uploads/karlone.jpeg') }}" alt="">
                            {{-- Post-user-name --}}
                            <span>Karlone</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="quick-share" class="ml-20 bg-[#f8f8ff] rounded-[12px] shadow shadow-[#212124] p-4 hidden">
                <header class="mb-6">
                    <h4 class="text-[#B7A54F] text-2xl font-bold max-md:text-center"> Quick Share</h4>
                </header>
                
                <form action="" method="" enctype="multipart/form-data">
                 @csrf
                   <div class='flex flex-col md:flex-row gap-8 p-8 rounded-2xl shadow-sm max-w-4xl mx-auto'>
                        <div class="flex-1 border-2 border-dashed border-gray-300 rounded-2xl flex flex-col items-center justify-center p-12 bg-gray-50/50 hover:bg-gray-50 transition-colors cursor-pointer group">
                            <label class="flex-1 border-2 border-dashed border-gray-300 rounded-2xl flex flex-col items-center justify-center p-12 bg-gray-50/50 hover:bg-gray-50 transition-colors cursor-pointer group relative">
                            <input 
                                type="file" 
                                class="hidden" 
                                accept="image/*"                             
                            />
                            <div class="w-16 h-16 bg-[#EDE6E0] rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                            </svg>
                            
                            </div>
                            <h3 class="text-xl font-bold text-gray-800">Drag & Drop Image</h3>
                            <p class="text-gray-500 mt-2">or click to browse from your device</p>
                        </div>

                        <div class="flex-1 flex flex-col space-y-6">
                            {{-- Caption Input  --}}
                            <div class="space-y-2">
                            <label class="block font-medium text-gray-700">Caption</label>
                            <textarea 
                                placeholder="What are you up to?" 
                                class="w-full h-32 p-4 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#C8A35C] focus:outline-none resize-none"
                            ></textarea>
                            <p class="text-right text-sm text-gray-400">280 characters remaining</p>
                            </div>
                            {{-- Category Select --}}
                            <div class="space-y-2">
                            <label class="block font-medium text-gray-700">Category</label>
                            <select class="w-full p-3 border border-gray-200 rounded-xl bg-white focus:ring-2 focus:ring-[#C8A35C] focus:outline-none appearance-none cursor-pointer">
                                <option>Travel</option>
                                <option>Work</option>
                                <option>Hobby</option>
                            </select>
                            </div>

                            {{-- Post Button  --}}
                            <button class="w-full py-4 bg-[#C8A35C] text-white font-bold rounded-xl hover:bg-[#D4C7B8] transition-colors shadow-sm">
                            Post
                            </button>
                        </div>
                    </div>
                </form>
                
               
        </section>

        <section id="my-activities" class="p-2 hidden">
            <header class="mb-6">
                <h4 class="text-[#B7A54F] text-2xl font-bold max-md:text-center"> My Activities</h4>
            </header>
            
            <div class="flex flex-col space-y-4 ">

                <div class="flex space-x-4 bg-[#f8f8ff] rounded-[12px] text-[#6b6b6b] shadow shadow-black transition-transform duration-[1000ms] hover:-translate-2">
                    <img class="w-[20%]  rounded-l-[12px]" src="{{ Storage::url('uploads/karlone2.jpeg') }}" alt="">
                    <div class="p-4">
                        <div class="flex justify-between items-center">
                            <span class="card-cat">categorie</span>
                            <div class="flex space-x-2">
                                <span><svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d='M14.678 3.272a3.483 3.483 0 0 1 4.928-.001l1.127 1.127a3.483 3.483 0 0 1 0 4.925L9.33 20.729a3.48 3.48 0 0 1-2.463 1.021H3a.75.75 0 0 1-.75-.75v-3.844a3.48 3.48 0 0 1 1.019-2.461zm3.867 1.06a1.983 1.983 0 0 0-2.806 0l-.896.897 3.931 3.931.898-.898a1.983 1.983 0 0 0 0-2.804z'/></svg>
                                </span> 
                                <span class="text-[#f3010f]"><svg  width="24" height="24" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d='m15.241 3.721.293 2.029H19.5a.75.75 0 0 1 0 1.5h-.769l-.873 10.185c-.053.62-.096 1.13-.165 1.542-.07.429-.177.813-.386 1.169a3.25 3.25 0 0 1-1.401 1.287c-.372.177-.764.25-1.198.284-.417.033-.928.033-1.55.033h-2.316c-.622 0-1.133 0-1.55-.033-.434-.034-.826-.107-1.198-.284a3.25 3.25 0 0 1-1.401-1.287c-.21-.356-.315-.74-.386-1.169-.069-.413-.112-.922-.165-1.542L5.269 7.25H4.5a.75.75 0 0 1 0-1.5h3.966l.293-2.029.011-.061c.182-.79.86-1.41 1.71-1.41h3.04c.85 0 1.528.62 1.71 1.41zM9.981 5.75h4.037l-.256-1.776c-.048-.167-.17-.224-.243-.224h-3.038c-.073 0-.195.057-.243.224zm1.269 4.75a.75.75 0 0 0-1.5 0v5a.75.75 0 0 0 1.5 0zm3 0a.75.75 0 0 0-1.5 0v5a.75.75 0 0 0 1.5 0z'/></svg> </span>
                            </div>
                        </div>
                        
                        <p class="py-10 border-b ">Christmas with family!</p>
                        
                        <div class="flex flex-row p-4 space-x-4 relative top-6"> 
                            <img class="w-[5%] rounded-full" src="{{ Storage::url('uploads/karlone1.jpeg') }}" alt="">
                            <div class="flex flex-col">
                                <span>User Name</span>
                                <span>Date</span>
                            </div>
                        </div>
                    </div>
                </div>

                


            </div>
        </section>
        
    </main>
</div>

@vite('resources/js/home.ts')
</x-layout>