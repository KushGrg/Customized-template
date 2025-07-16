<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.empty')]
#[Title('Login')]
class extends Component {

    #[Rule('required|email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    public function mount()
    {
        // It is logged in
        if (auth()->user()) {
            return redirect('/');
        }
    }

    public function login()
    {
        $credentials = $this->validate();

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            
            request()->session()->regenerate();

            // If email is not verified, redirect to verification page
            if (!$user->hasVerifiedEmail()) {
                return redirect()->route('verification.notice');
            }
            
            return redirect()->intended('/dashboard');
        }

        $this->addError('email', 'The provided credentials do not match our records.');
    }
}; ?>

<div class="md:w-96 mx-auto mt-20">
    <div class="mb-10">
    </div>
    <x-card class="shadow-xl">
    <x-app-brand />
    <x-card title="Sign in to your account" class="text-center" >
        <x-form wire:submit="login">
            <x-input placeholder="E-mail" wire:model="email" icon="o-envelope" />
            <x-input placeholder="Password" wire:model="password" type="password" icon="o-key" />
            
            <div class="text-right mt-2">
                <a href="{{ route('password.request') }}" class="text-sm text-primary hover:text-primary-focus">
                    Forgot your password?
                </a>
            </div>
            
            <x-slot:actions>
                {{-- <x-button label="Create an account" class="btn-ghost" link="/register" /> --}}
                <x-button label="Login" type="submit" icon="o-paper-airplane" class="bg-violet-800 text-white" spinner="login" />
            </x-slot:actions>
        </x-form>
    </x-card>
    </x-card>
</div>