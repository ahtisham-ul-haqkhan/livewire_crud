<?php
namespace App\Livewire;

use App\Events\MessageSendEvent;
use App\Models\Message;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatsComponent extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $messages = [];

    public function render()
    {
        return view('livewire.chats-component');
    }

    public function mount()
    {
        $this->messages = Message::all();
    }

    public function sendMessage()
    {
        $chatMessage = Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        $this->appendChatMessage($chatMessage);

        broadcast(new MessageSendEvent($chatMessage))->toOthers();

        $this->name = '';
        $this->email = '';
        $this->message = '';
    }

    #[On('echo-private:chat-channel,MessageSendEvent')]
    public function listenForMessage($event)
    {
        $chatMessage = Message::whereId($event['message']['id'])->first();
        $this->appendChatMessage($chatMessage);
    }

    public function appendChatMessage($message)
    {
        $this->messages[] = $message;
    }
}
