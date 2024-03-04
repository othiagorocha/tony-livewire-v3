<div class="[&_input]:text-zinc-800">
    <h1>Tasks</h1>
    <input type="text" wire:model='task' placeholder="add task" wire:keydown.enter='add'>

    <ul>
        @foreach ($tasks as $index => $task)
            <li>
                {{ $index + 1 }} - {{ $task }}
            </li>
        @endforeach
    </ul>
</div>
