<div>
<!-- Open the modal using ID.showModal() method -->

    <dialog id="logoutModal" class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Are you sure?</h3>
        <p class="py-1">This acction destroy your session.</p>
        <div class="modal-action">
            <button class="btn btn-error btn-sm" wire:click='logout'>Yes logout</button>
        <form method="dialog">
            <!-- if there is a button in form, it will close the modal -->
            <button class="btn btn-sm">Close</button>
        </form>
        </div>
    </div>
    </dialog>
</div>
