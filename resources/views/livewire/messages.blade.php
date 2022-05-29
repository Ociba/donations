<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form wire:submit.prevent="save">
        <div class="row">
        @if(session()->has('success')) <div style="color:blue;">{{session('success')}}</div>@endif
            <div class="col-lg-6 col-md-12 mb-3">
                <div class="form-group">
                    <input type="text" wire:model="names" id="Name" class="form-control"  placeholder="Your Name">
                    @error('names') <span style="color:red;">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-3">
                <div class="form-group">
                    <input type="email" wire:model="emails" id="Emails" class="form-control"  placeholder="Your Email">
                    @error('emails') <span style="color:red;">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-3">
                <div class="form-group">
                    <input type="text" wire:model="contact" id="Contact"  class="form-control" placeholder="Your Phone">
                    @error('contact') <span style="color:red;">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-3">
                <div class="form-group">
                    <input type="text" wire:model="subject" id="Subject" class="form-control"  placeholder="Your Subject">
                    @error('subject') <span style="color:red;">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-3">
                <div class="form-group">
                    <textarea wire:model="message" class="form-control" id="Message" cols="30" rows="5"  placeholder="Your Message"></textarea>
                    @error('message') <span style="color:red;">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="col-lg-12 col-md-12 text-center">
                <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Send Message</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                
            </div>
        </div>
    </form>
</div>
