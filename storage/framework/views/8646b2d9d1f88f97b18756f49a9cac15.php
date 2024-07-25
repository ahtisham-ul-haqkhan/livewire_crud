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
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($message->message); ?></td>
                    <td><?php echo e($message->email); ?></td>
                    <td><?php echo e($message->name); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div><?php /**PATH G:\AHTISHAM\xampp\htdocs\projects\livewire\laravel-reverb-chat-app-main-justcrud\resources\views\livewire\chats-component.blade.php ENDPATH**/ ?>