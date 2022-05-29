<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Exception;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Information extends Component
{
    use LivewireAlert;
    public $bio, $address, $dateofbirth, $age, $phone, $gender;

    protected $rules = [
        'dateofbirth'   => 'required',
        'phone'         => 'required|max:15',
    ];

    public function submit()
    {
        $this->validate();
        try {
            $user               = User::findOrFail(auth()->user()->id);
            $user->bio          = $this->bio;
            $user->address      = $this->address;
            $user->gender       = $this->gender;
            $user->dateofbirth  = $this->dateofbirth;
            $user->age          = $this->age;
            $user->phone        = $this->phone;
            $user->save();

            $this->alert('success', 'User data information changed !', [
                'position' => 'center',
                'timer' => 5000,
                'toast' => true,
                'width' => '',
               ]);

        } catch (Exception $e) {
            $this->alert('error', $e->getMessage(), [
                'position' => 'center',
                'timer' => 9000,
                'toast' => true,
                'width' => '',
               ]);
        }
    }

    public function render()
    {
        return view('livewire.user.information', [
            'user' => User::findOrFail(auth()->user()->id)
        ]);
    }
}
