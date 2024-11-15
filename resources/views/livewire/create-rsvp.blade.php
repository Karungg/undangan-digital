<div>

    <form wire:submit.prevent='save' method="POST">
        <div class="card-body">
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Nama</span>
                </div>
                <input type="text" placeholder="Nama" name="name" wire:model.live.debounce.250ms='name'
                    class="input input-bordered w-full max-w-xs" required />
            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Jumlah</span>
                </div>
                <input type="number" min="1" placeholder="Jumlah" name="amount"
                    wire:model.live.debounce.250ms='amount' class="input input-bordered w-full max-w-xs" required />
            </label>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Konfirmasi</span>
                </div>
                <select class="select select-bordered" wire:model.live.debounce.250ms='confirm'>
                    <option value="Saya akan datang">Saya akan datang</option>
                    <option value="Maaf, saya tidak bisa datang">Maaf, saya tidak bisa datang</option>
                </select>
            </label>
            <button type="submit" class="btn w-full mt-4">Kirim</button>
        </div>
    </form>
</div>
