<ul>
    @foreach($accounts as $account)
        {{--@foreach($account->admin as $admin)
                {{ dd($admin->lastname) }}
            @endforeach--}}

        {{ dd($account->admin->firstname) }}
    @endforeach
</ul>