<h1>View Each Item information </h1>
<h2>{{$data->title}}</h2>
<h2>{{$data->description}}</h2>
<p>
    <iframe src = "{{url('storage/'.$data->file)}}" style = "width:600px; height:500px;" ></iframe>
</p>