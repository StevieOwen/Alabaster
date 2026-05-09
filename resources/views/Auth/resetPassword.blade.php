<x-authLayout>
    <div class="relative top-20 flex flex-col justify-center items-center p-6 ">
    <div class="bg-[#fff] p-8 rounded-[12px] flex flex-col space-y-2 justify-center items-center shadow shadow-black">
        <h4 class="text-[#B7A54F] text-[min(2vw,150px)] font-bold">Reset Password</h4>
       
        <form id="form-reset-password" class="mt-2 flex flex-col space-y-4 " action="{{ route('password.update') }}" method="POST">
            @csrf
            <!-- Hidden Token and Email required by Fortify -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <input type="hidden" name="email" value="{{ $request->email }}">


            <div class='flex flex-col space-y-1'>
                <label for="pwd"> New Password</label>
                <div class="relative w-full">
                    <input class='form-input w-full pl-4 pr-10' type="password" name="password" id="pwd" placeholder="........." required>
                    <button type="button" id="toggle-pwd" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none">
                       <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path id="eye-icon-path" d="M2.55 13.406c-.272-.373-.408-.56-.502-.92a2.5 2.5 0 0 1 0-.971c.094-.361.23-.548.502-.92C4.039 8.55 7.303 5 12 5s7.961 3.55 9.45 5.594c.272.373.408.56.502.92a2.5 2.5 0 0 1 0 .971c-.094.361-.23.548-.502.92C19.961 15.45 16.697 19 12 19s-7.961-3.55-9.45-5.594M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                            <path id="eye-slash-path" class="hidden" d="m21 21-18-18"/>
                        </svg>
                    </button>    
                </div>    
                @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            
            <div class='flex flex-col space-y-1'>
                <label for="pwd_confirmation">Confirm new Password</label>
                <div class="relative w-full">
                    <input class='form-input w-full pl-4 pr-10' type="password" name="password_confirmation" id="pwd_confirmation" placeholder="........." required>
                    <button type="button" id="toggle-pwd1" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none">
                       <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                            <path id="eye-icon-path1" d="M2.55 13.406c-.272-.373-.408-.56-.502-.92a2.5 2.5 0 0 1 0-.971c.094-.361.23-.548.502-.92C4.039 8.55 7.303 5 12 5s7.961 3.55 9.45 5.594c.272.373.408.56.502.92a2.5 2.5 0 0 1 0 .971c-.094.361-.23.548-.502.92C19.961 15.45 16.697 19 12 19s-7.961-3.55-9.45-5.594M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                            <path id="eye-slash-path1" class="hidden" d="m21 21-18-18"/>
                        </svg>
                    </button>    
                </div>    
                
            </div>

            <div class="flex justify-center">
                <input class="input-submit" id="update_password" type="submit" value="Update Password">
            </div>
            
        </form>
    </div>
</div>

@vite('resources/js/resetPassword.ts')

</x-authLayout>