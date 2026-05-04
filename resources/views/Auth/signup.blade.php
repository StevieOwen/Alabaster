<x-authLayout>
<div class="relative top-20 flex flex-col justify-center items-center p-6 ">
    <div class="bg-[#fff] p-8 rounded-[12px] flex flex-col space-y-2 justify-center items-center shadow shadow-black">
        <h4 class="text-[#B7A54F] text-[min(2vw,150px)] font-bold">Create Account</h4>
        <p class="text-[#6b6b6b]">Join our community of moment-sharers</p>
        <form class="mt-2 flex flex-col space-y-4 " action="" method="">
            <div class='flex flex-col space-y-1'>
                <label for="full-name"> Full Name</label>
                <input class='form-input' type="full-name" id="full-name" name="full-name" value="" placeholder="John Doe" required>
            </div>

            <div class='flex flex-col space-y-1'>
                <label for="email"> Email</label>
                <input class='form-input' type="email" id="email" name="email" value="" placeholder="johndoe@gmail.com" required>
            </div>

            <div class='flex flex-col space-y-1'>
                <label for="pwd"> Password</label>
                <input class='form-input' type="password" name="pwd" id="pwd" placeholder="........." required>
            </div>

            

            <div class="flex justify-center">
                <input class="input-submit" type="submit" value="Create Account">
            </div>
            <div>
                <p class="text-center text-[#6b6b6b]">Already have an account? <span class="text-[#C8A35C] "><a href="/signin" class="link">Sign In</a> </span></p>
            </div>
        </form>
    </div>
</div>
</x-authLayout>