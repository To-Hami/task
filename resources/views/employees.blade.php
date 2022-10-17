<h2>All Employees :</h2>

@foreach($employees as $index=>$employ)

    <h4>
        {{ $index+1 . '  => The Employee  ' . $employ['First Name'] . ' ' .  $employ['Last Name'] . ' work in ' . $employ['Company'] .' Company' }}
    </h4>

@endforeach
