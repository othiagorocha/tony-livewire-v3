<div class="[&_input]:rounded-lg [&_input]:text-zinc-800">
    <h1>Tasks</h1>

    <form wire:submit="">
        <input type="text" wire:model='task' placeholder="add task" wire:keydown.enter='add'>
        <button class="rounded-md bg-indigo-500 p-2">Add</button>
    </form>

    <ul>
        @foreach ($tasks as $index => $task)
            <li wire:dblclick='remove({{ $index }})'>
                {{ $index + 1 }} - {{ $task }}
            </li>
        @endforeach
    </ul>
</div>
