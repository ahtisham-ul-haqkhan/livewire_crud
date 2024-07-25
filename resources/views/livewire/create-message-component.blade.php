<div class="mb-4">
    <div class="mb-3">
        <input type="text" wire:model="name" placeholder="Your Name" class="form-control">
    </div>
    <div class="mb-3">
        <input type="email" wire:model="email" placeholder="Your Email" class="form-control">
    </div>
    <div class="mb-3">
        <input type="text" wire:model="message" placeholder="Your Message" class="form-control">
    </div>
    <button wire:click="sendMessage" class="btn btn-primary">Send</button>
</div>
