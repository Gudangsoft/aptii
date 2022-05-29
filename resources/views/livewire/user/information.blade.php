<div>
    <form wire:submit.prevent="submit" class="validate-form">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="accountTextarea"bio>Bio</label>
                    <textarea class="form-control" wire:model='bio' id="accountTextarea" rows="4">{{ auth()->user()->bio }}</textarea>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="accountSelect">Gender</label>
                    <select class="form-control" id="accountSelect" wire:model="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="pd-months-year">Date of birth</label>
                    <input type="text" wire:model="dateofbirth" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="account-website">Age</label>
                    <div class="input-group input-group-lg">
                        <input type="number" wire:model="age" class="touchspin" value="18" />
                    </div>
                    @error('age') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-group">
                    <label for="account-phone">Phone</label>
                    <input type="number" wire:model="phone" class="form-control" id="account-phone" placeholder="Phone number" value="(+656) 254 2568" name="phone" />
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="accountTextarea">Address</label>
                    <textarea class="form-control" wire:model="address" id="accountTextarea" rows="2" placeholder="Your address...">{{ auth()->user()->address }}</textarea>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-1 mr-1">Save changes</button>
            </div>
        </div>
    </form>
</div>
