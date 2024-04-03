<div class="navbar bg-base-100">
    <div class="flex-1">
      <a class="btn btn-ghost text-xl"><img src="{{asset('images/logo_192.png')}}" class="w-8 h-8" alt="logo" /> MyFiles</a>
      
    </div>
    <div class="flex-none gap-2">
        <button class="btn btn-warning btn-sm mr-3" onclick="AddFileModal.showModal()">Add Files</button>
      <x-common.themeSwitch />
      <div class="dropdown dropdown-end ml-3">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
          </div>
        </div>
        <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
          <li>
            <a class="justify-between">
              Profile
            </a>
          </li>
          <li><a onclick="logoutModal.showModal()">Logout</a></li>
        </ul>
      </div>
    </div>
    <livewire:auth.logout lazy/>
    <livewire:files.add-file />
    <x-common.toast/>
  </div>