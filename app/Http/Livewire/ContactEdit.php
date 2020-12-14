<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactEdit extends Component
{
    public function render()
    {
        return view('livewire.contact-edit');
    }

    // protected $listeners = ['showContact'];
    public $nama_depan;
    public $nama_belakang;
    public $no_hp;
    public $email;

    // public function showContact($contact)
    // {
    //     // $this->contact_id = $contact['id'];
    //     // $this->nama_depan = $contact['nama_depan'];
    //     // $this->nama_belakang = $contact['nama_belakang'];
    //     // $this->no_hp = $contact['no_hp'];
    //     // $this->email = $contact['email'];
    // }
}
