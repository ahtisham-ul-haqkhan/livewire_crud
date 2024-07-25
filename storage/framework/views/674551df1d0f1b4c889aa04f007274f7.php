<div class="mt-4 mb-4">
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
</div><?php /**PATH G:\AHTISHAM\xampp\htdocs\projects\livewire\laravel-reverb-chat-app-main-justcrud\resources\views\livewire\view-messages-component.blade.php ENDPATH**/ ?>