<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <x-app-layout>
    </x-app-layout>

    <div style="padding-left:40%;padding-top:10%">
        <form action="{{url('confirm_update',$data->id)}}"method="POST"enctype="multipart/form-data">
            @csrf
            <div>
                <label>Post Description</label>
                <input type="text"name="description"value={{$data->Description}}>
            </div>

            <br>

            <div>
                <label>Current Image</label>
                <img src="/uploads/gallery/{{$data->Image}}"height="400px"width="400px">
            </div>

            <br>

            <div>
                <label>Change Image</label>
                <input type="file"name="image">
            </div>

            <br>

            <div>
                <input type="Submit"value="Update Post"style="background:GreenYellow;cursor:pointer;padding:10px;border-radius:10px">
            </div>

        </form>
    </div>


</body>
</html>
