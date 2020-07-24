<table border = "1px">
    <tr>
        <th>Sl</th>
        <th>Title</th>
        <th>Description</th>
        <th>View</th>
        <th>Download</th>
    @foreach($fileInfo as $key=>$data)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->description}}</td>
            <td><a href = "{{url('/files/view/'.$data->id)}}">View</a> </td>
            <td><a href = "{{url('/files/download/'.$data->file)}}">Download</a> </td>
        </tr>
    @endforeach
    </tr>
</table>
