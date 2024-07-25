<div>
  <div style="overscroll-behavior: none;">
        <div
          class="fixed w-full bg-green-400 h-16 pt-2 text-white flex justify-between shadow-md"
          style="top:0px; overscroll-behavior: none;"
        >
          <!-- back button -->
    
        </div>
  
  
      <form wire:submit="sendMessage()">
        <div class="fixed w-full flex justify-between bg-green-100" style="bottom: 0px;">
            <input
                type="email"
                class="flex-grow m-2 py-2 px-4 mr-1 rounded-full border border-gray-300 bg-gray-200"
                wire:model="email"
                placeholder="Email"
                style="outline: none;"
            />
            <input
            type="text"
            class="flex-grow m-2 py-2 px-4 mr-1 rounded-full border border-gray-300 bg-gray-200"
            wire:model="name"
            placeholder="Name"
            style="outline: none;"
        />
   
            <textarea
                class="flex-grow m-2 py-2 px-4 mr-1 rounded-full border border-gray-300 bg-gray-200 resize-none"
                rows="1"
                wire:model="message"
                placeholder="Message..."
                style="outline: none;"
            ></textarea>
            <button class="m-2" type="submit" style="outline: none;">
                Send
            </button>
        </div>
    </form>
    
  </div>
  <?php /**PATH G:\AHTISHAM\xampp\htdocs\projects\livewire\laravel-reverb-chat-app-main-justcrud\resources\views/livewire/chat-component.blade.php ENDPATH**/ ?>