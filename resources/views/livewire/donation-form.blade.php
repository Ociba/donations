<div>
{{-- Nothing in the world is as soft and yielding as water. --}}
<form wire:submit.prevent="submit">
    <div class="row">
        @if(session()->has('success')) <div style="color:blue;">{{session('success')}}</div>@endif
        <div class="col-lg-6 col-sm-12 col-md-6">
            <div class="payment-box">
                <div class="payment-method">
                    <p style="color: #ff1949;">Make a donation and a gift of hope</p>
                    <p>
                        <input type="radio" id="computer" value="800" wire:model="amount" checked>
                        <label for="computer"> $800 -Provides Computer Studies</label>
                    </p>
                    <p>
                        <input type="radio" id="music" value="500" wire:model="amount">
                        <label for="music">$500  -Provides Music,Dance & Drama Education</label>
                    </p>
                    <p>
                        <input type="radio" id="sports" value="300" wire:model="amount">
                        <label for="sports">$300 -Provides Physical Education</label>
                    </p>
                    <p>
                        <input type="radio" id="structures" value="200"  wire:model="amount">
                        <label for="structures">$200 -Provides Study Structures</label>
                    </p>
                    <p>
                        <input type="radio" id="community" value="100" wire:model="amount">
                        <label for="community">$100 -Provides Community Projects</label>
                    </p>
                    <p>
                        <input type="radio" id="materials" value="60" wire:model="amount">
                        <label for="materials">$60 -Equipments,Faciities & Costumes</label>
                    </p>
                    <p>
                        $ <input type="radio" id="materials" name="amount"> <input type="text" id="" wire:model="amount">
                    </p>
                    <p>
                    {{--<div  class="col-lg-5 col-md-4 col-sm-12">
                        <div class="form-group">
                            <select id="DonationType" wire:model="donation_type" >
                                <option value="ones">One Time donation</option>
                                <option value="recurring">Recurring donation</option>
                            </select>
                        </div>
                    </div>
                    --}}
                    <hr>
                    <p>Donation Type</p>
                    <input type="radio" id="one" value="one" wire:model="donation_type" name="" checked>
                        <label for="One Time" class="mr-3">One Time Donation</label>&nbsp;&nbsp;&nbsp;
                        <input type="radio" id="one" value="recurring" wire:model="donation_type">
                        <label for="Recurring">Recurring Donation</label>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6">
            <div class="single-courses-category mb-30">
                <div class="contact-form" style="box-shadow:none; border-radius: 0px;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" wire:model="first_name" id="Firstname" class="form-control" placeholder="First Name">
                                @error('first_name') <span style="color:red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" wire:model="last_name" id="Lastname" class="form-control" placeholder="Your Last Name">
                                <div class="help-block">@error('last_name') <span style="color:red;">{{ $message }}</span> @enderror</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                            <div class="form-group">
                                <input type="email" wire:model="email" id="Email" class="form-control" placeholder="Your Email">
                                <div class="help-block">@error('email') <span style="color:red;">{{ $message }}</span> @enderror</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" wire:model="address" id="Address" class="form-control" placeholder="Your Address">
                                <div class="help-block with-errors">@error('address') <span style="color:red;">{{ $message }}</span> @enderror</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" wire:model="contact" id="Contact" class="form-control"  placeholder="Your Contact">
                                <div class="help-block with-errors">@error('contact') <span style="color:red;">{{ $message }}</span> @enderror</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" wire:model="city" id="City" class="form-control" placeholder="Your city">
                                <div class="help-block with-errors">@error('city') <span style="color:red;">{{ $message }}</span> @enderror</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" wire:model="state" id="State" class="form-control" placeholder="Your State">
                                <div class="help-block with-errors">@error('state') <span style="color:red;">{{ $message }}</span> @enderror</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" wire:model="postal_code" id="Postalcode" class="form-control"  placeholder="Your Postal Code">
                                <div class="help-block with-errors">@error('postal_code') <span style="color:red;">{{ $message }}</span> @enderror</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                            <div class="form-group">
                                <input type="text" wire:model="country" id="Country" class="form-control" placeholder="Your country">
                                <div class="help-block with-errors">@error('country') <span style="color:red;">{{ $message }}</span> @enderror</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 mb-3">
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="create-an-account">
                                    <label class="form-check-label" for="create-an-account">I am not a robot</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 text-center">
                <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Send Information</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                
            </div>
        </div>
</form>
</div>