<div>
    @foreach($all as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->position }}</td>
        </tr>
        @endforeach
        </tbod>
        </table>
        <a wire:click="load" class="btn btn-primary">Show More</a>
</div>
