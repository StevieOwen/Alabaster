<x-authLayout>
<div class="relative top-20 flex flex-col justify-center items-center p-6 ">
    <div class="bg-[#fff] p-8 rounded-[12px] flex flex-col space-y-2 justify-center items-center shadow shadow-black">
        <h4 class="text-[#B7A54F] text-[min(2vw,150px)] font-bold">Welcome Back</h4>
        <p class="text-[#6b6b6b]">Login to continue sharing your moments</p>
        @if ($errors->any())
            <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 10px;">
                <ul id="errors">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="form_signin" class="mt-2 flex flex-col space-y-4 " action="{{ route('login') }}" method="POST">
            @csrf
            <div class='flex flex-col space-y-1'>
                <label for="email"> Email</label>
                <input class='form-input' type="email" id="email" name="email" value="{{ old('email') }}" placeholder="johndoe@gmail.com" required>
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

            <div class="text-right">
                <p class="text-[#C8A35C]"><a href="{{ route('password.request') }}" class="link">Forgot password?</a></p>
            </div>

            <div class="flex justify-center">
                <input class="input-submit" id="login" type="submit" value="Log In">
            </div>
            <div>
                <p class="text-center text-[#6b6b6b]">Don't have an account yet? <span class="text-[#C8A35C]"><a class="link" href="/signup">Sign Up</a> </span></p>
            </div>
        </form>
    </div>
</div>

@vite('resources/js/signup.ts')
</x-authLayout>