<x-authLayout>
<meta http-equiv="refresh" content="10">
<div class="relative top-20 flex flex-col justify-center items-center p-6 ">
    <div class="bg-[#fff] p-8 rounded-[12px] flex flex-col space-y-2 justify-center items-center shadow shadow-black">
        <h4 class="text-[#B7A54F] text-[min(3vw,24px)] font-bold">Email Validation</h4>
        
        @if (session('status') == 'verification-link-sent')
            <div class="text-green-600 text-sm text-center">
                A new verification link has been sent to your email!
            </div>
        @endif

        <p class="text-[#6b6b6b] text-center text-sm">
            Please check your inbox. Click the link we sent you to verify your account.
        </p>

        <form class="mt-4 flex flex-col space-y-4 w-full" action="{{ route('verification.send') }}" method="POST">
            @csrf
            
            <div class="flex flex-col space-y-4">
                <input class="input-submit cursor-pointer" type="submit" value="Resend Verification Email">
            </div>
            
            <div class="text-center">
                <p class="text-sm">Wrong email? <a href="/logout" class="text-[#C8A35C] hover:underline">Log out</a></p>
            </div>
        </form>
    </div>
</div>

<script>
    // Check every 2 seconds if the user is verified yet
    const checkVerification = setInterval(async () => {
        try {
            const response = await fetch('/email/status');
            const data = await response.json();

            if (data.verified) {
                // Stop the timer
                clearInterval(checkVerification);
                // Redirect to the dashboard/home
                window.location.href = '/home'; 
            }
        } catch (error) {
            console.error("Status check failed", error);
        }
    }, 2000);
</script>
</x-authLayout>