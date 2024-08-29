{{-- @props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif --}}
@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-danger text-sm text-red-600 space-y-1 error-messages']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>

    <script>
        setTimeout(function() {
            var errorMessages = document.getElementsByClassName('error-messages');
            for (var i = 0; i < errorMessages.length; i++) {
                errorMessages[i].style.display = 'none';
            }
        }, 3000); // Disappear after 3 seconds (3000 milliseconds)
    </script>
@endif
