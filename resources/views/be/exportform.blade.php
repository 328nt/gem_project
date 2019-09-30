<table>
    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Firstname</th>
        <th>DoB</th>
        <th>Class</th>
        <th>Grade</th>
        <th>School</th>
        <th>Address</th>
        <th>Ward</th>
        <th>District</th>
        <th>Province</th>
        <th>Parentname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Name Contest</th>
        <th>link</th>
    </tr>
    </thead>
    <tbody>
    @foreach($contestants as $cont)
        <tr>
            <td>{{ $cont->id }}</td>
            <td>{{ $cont->name }}</td>
            <td>{{ $cont->firstname }}</td>
            <td>{{ $cont->dob }}</td>
            <td>{{ $cont->class }}</td>
            <td>{{ $cont->grade }}</td>
            <td>{{ $cont->school }}</td>
            <td>{{ $cont->address }}</td>
            <td>{{ $cont->ward }}</td>
            <td>{{ $cont->district }}</td>
            <td>{{ $cont->province }}</td>
            <td>{{ $cont->parentname }}</td>
            <td>{{ $cont->email }}</td>
            <td>{{ $cont->phone }}</td>
            <td>{{ $cont->name_link }}</td>
            <td>{{ $cont->link }}</td>
        </tr>
    @endforeach
    </tbody>
</table>