<div>
        <div class="h-screen flex justify-center items-center">
            <form class="w-[500px]" wire:submit='register'>
                <div class="">
                    <h1 class="text-2xl font-bold mb-2">Register</h1>
                    <p>Welcome back to myfiles cloud</p>
                </div>
               
                <div class="mb-2">
                    <label for="name">Name</label>
                    <input type="text"  placeholder="Type here" id="name" class="input input-bordered w-full" wire:model='name' />
                    
                @error('name')
               
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
             
                </div>
                <div class="mb-2">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Type here" class="input input-bordered w-full" wire:model='email' />
                    @error('email')
               
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                </div>
                <div class="mb-2">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Type here" class="input input-bordered w-full" wire:model='password' />
                    @error('password')
               
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                </div>
                <div class="mb-2">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" placholder="Type here" class="input input-bordered w-full" wire:model='password_confirmation' />
                    @error('password_confirmation')
               
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                </div>
                <div class="mb2">
                    <button class="btn btn-warning w-full" type="submit">Submit</button>
                </div>
                <p class="text-center">--- OR ---</p>
                <p class="text-center">Already have an account? <a class="text-warning font-bold" href="{{route('login')}}" wire:navigate>Login</a></p>
                </form>
        </div>
    
    

</div>