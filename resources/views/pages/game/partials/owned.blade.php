<table class="table owned-games">
    @foreach($ownedGames as $game)
        <tr>
            <td class="game">
                <a href="{{ $game['game']->steamStoreURL() }}" title="@lang('phrase.view-game-in-steam-store', ['game' => $game['game']->name])">
                    <img src="{{ $game['game']->image() }}" alt="@lang('phrase.logo-for-game', ['game' => $game['game']->name])">
                </a>
            </td>
            <td class="user-count">
                @lang('phrase.x-owners', ['x' => count($game['users'])])
            </td>
            <td>
                @foreach($game['users'] as $user)
                    <a href="{{ route('users.show', $user->id) }}">
                        @include('pages.user.partials.avatar', ['user' => $user])
                    </a>
                @endforeach
            </td>
        </tr>
    @endforeach
</table>