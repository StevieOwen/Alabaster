<x-authLayout>
    <div class="relative top-20 flex flex-col justify-center items-center p-6 ">
    <div class="bg-[#fff] p-8 rounded-[12px] flex flex-col space-y-2 justify-center items-center shadow shadow-black">
        <h4 class="text-[#B7A54F] text-[min(2vw,150px)] font-bold">Forgot Password?</h4>
        <p class="text-[#6b6b6b]">Enter your email and we'll send you a reset link.</p> 
        @if (session('status'))
            <div class="mb-4 text-green-600 text-sm font-medium">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->has('email'))
            <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 text-sm rounded-lg flex items-center">
                <svg class="w-5 h-5 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                <span>{{ $errors->first('email') }}</span>
            </div>
        @endif
        <form id="form" class="mt-2 flex flex-col space-y-4 " action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class='flex flex-col space-y-1'>
                <label for="email"> Email </label>
                <input class='form-input' type="email" id="email" name="email" value="" placeholder=" Write your email here" required>
            </div>

            <div class="flex justify-center">
                <input class="input-submit" type="submit" id="send_link" value="Send Reset Link">
            </div>
            
        </form>
    </div>
</div>

@vite('resources/js/resetPassword.ts')

</x-authLayout>