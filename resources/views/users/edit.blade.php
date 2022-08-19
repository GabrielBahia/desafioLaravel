<x-layout title="Editar usuário {{ $user->name }} ">
    <x-users.form :action="route('users.update', $user->id)" :user="$user" :update="true"/>
</x-layout>