<x-authLayout>
<div class="relative top-20 flex flex-col justify-center items-center p-6 ">
    <div class="bg-[#fff] p-8 rounded-[12px] flex flex-col space-y-2 justify-center items-center shadow shadow-black">
        <h4 class="text-[#B7A54F] text-[min(2vw,150px)] font-bold">Create Account</h4>
        <p class="text-[#6b6b6b]">Join our community of moment-sharers</p>

        @if ($errors->any())
            <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 10px;">
                <ul id="errors">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="registration" class="mt-2 flex flex-col space-y-4 " action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
           @csrf
            <div class='flex flex-col space-y-1'>
                <label for="full-name"> Full Name</label>
                <input class='form-input' type="full-name" id="full-name" name="full_name" value="" placeholder="John Doe" required>
            </div>

            <div class='flex flex-col space-y-1'>
                <label for="email"> Email</label>
                <input class='form-input' type="email" id="email" name="email" value="" placeholder="johndoe@gmail.com" required>
            </div>

            <div class='flex flex-col space-y-1 w-full'>
                <label for="pwd"> Password</label>
                <div class="relative w-full">
                    <input class='form-input w-full pl-4 pr-10' type="password" name="password" id="pwd" placeholder="........." required>
                    <button type="button" id="toggle-pwd" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none">
                       <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path id="eye-icon-path" d="M2.55 13.406c-.272-.373-.408-.56-.502-.92a2.5 2.5 0 0 1 0-.971c.094-.361.23-.548.502-.92C4.039 8.55 7.303 5 12 5s7.961 3.55 9.45 5.594c.272.373.408.56.502.92a2.5 2.5 0 0 1 0 .971c-.094.361-.23.548-.502.92C19.961 15.45 16.697 19 12 19s-7.961-3.55-9.45-5.594M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                            <path id="eye-slash-path" class="hidden" d="m21 21-18-18"/>
                        </svg>
                    </button>    
                </div>    
            </div>
            <div class='flex flex-col space-y-1 w-full'>
                <label for="pwdconf"> Password Confirmation</label>
                <div class="relative w-full">
                    <input class='form-input w-full pl-4 pr-10' type="password" name="password_confirmation" id="pwdconf" placeholder="........." required>
                    <button type="button" id="toggle-pwd1" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none">
                       <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path id="eye-icon-path1" d="M2.55 13.406c-.272-.373-.408-.56-.502-.92a2.5 2.5 0 0 1 0-.971c.094-.361.23-.548.502-.92C4.039 8.55 7.303 5 12 5s7.961 3.55 9.45 5.594c.272.373.408.56.502.92a2.5 2.5 0 0 1 0 .971c-.094.361-.23.548-.502.92C19.961 15.45 16.697 19 12 19s-7.961-3.55-9.45-5.594M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                            <path id="eye-slash-path1" class="hidden" d="m21 21-18-18"/>
                        </svg>
                    </button>    
                </div>    
            </div>

            <div class='flex flex-col space-y-1'>
                <label for="profile">Profile Picture</label>
                <input class='form-input' type="file" accept="image/png, image/jpeg, image/webp" name="profile_picture" id="profile">
            </div>
            

            <div class="flex justify-center">
                <input class="input-submit" type="submit" value="Create Account" id="btn-create-account">
            </div>
            <div>
                <p class="text-center text-[#6b6b6b]">Already have an account? <span class="text-[#C8A35C] "><a href="/signin" class="link">Sign In</a> </span></p>
            </div>
        </form>
    </div>
</div>

@vite('resources/js/signup.ts')
</x-authLayout>