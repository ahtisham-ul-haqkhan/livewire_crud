<div class="mt-4 mb-4">
    <!-- Input fields for adding a new message -->
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

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Message</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
