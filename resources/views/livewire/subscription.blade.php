<div>
    {{-- The Master doesn't talk, he acts. --}}
    @if(session()->has('success')) <div style="color:blue;">{{session('success')}}</div>@endif
    <form wire:submit.prevent="subscribe" class="newsletter-form">
        <label>Your e-mail address:</label>
        <input type="email" class="input-newsletter" wire:model="subscriber_email" placeholder="Enter your email"  autocomplete="off">
        @error('subscriber_email') <span style="color:red;">{{ $message }}</span> @enderror
        <button type="submit">Subscribe</button>
    </form>
</div>
