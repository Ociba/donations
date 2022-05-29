<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @if(session()->has('success')) <div style="color:blue;">{{session('success')}}</div>@endif
    <form wire:submit.prevent="sendMessage">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" wire:model="names" placeholder="Your name*">
                    <span class="label-title"><i class='bx bx-user'></i></span>
                    @error('names') <span style="color:red;">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control" wire:model="emails" placeholder="Your Email*">
                    <span class="label-title"><i class='bx bx-envelope'></i></span>
                    @error('emails') <span style="color:red;">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" wire:model="contact" placeholder="Your Contact*">
                    <span class="label-title"><i class='bx bx-phone'></i></span>
                    @error('contact') <span style="color:red;">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" wire:model="subject" placeholder="Your subject*">
                    <span class="label-title"><i class='bx bx-check'></i></span>
                    @error('subject') <span style="color:red;">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <textarea cols="30" rows="5" class="form-control" wire:model="message" placeholder="Write something here"></textarea>
                    <span class="label-title"><i class='bx bx-edit'></i></span>
                    @error('message') <span style="color:red;">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Send Message</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
            </div>
        </div>
    </form>
</div>
