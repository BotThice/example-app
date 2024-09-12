<dv class="text-gray-900 dark:text-gray-100">
    <h2>Personality Information</h2>

    @if($user->personality)
    <p><strong>Type:</strong> {{ $user->personality->type }}</p>
    <p><strong>Description:</strong> {{ $user->personality->description }}</p>
    @else
    <p>No personality information assigned.</p>
    @endif

</div>