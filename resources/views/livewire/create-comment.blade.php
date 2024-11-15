<div>
    <form wire:submit.prevent='save' method="POST">
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Nama</span>
            </div>
            <input type="text" wire:model.live.debounce.250ms='name' name="name" placeholder="Nama"
                class="input input-bordered w-full" required />
        </label>
        <label class="form-control w-full">
            <div class="label">
                <span class="label-text">Ucapan</span>
            </div>
            <input type="text" wire:model.live.debounce.250ms='words' name="words" placeholder="Ucapan"
                class="input input-bordered w-full" required />
        </label>
        <button type="submit" class="btn w-full mt-4">Kirim</button>
    </form>
</div>
