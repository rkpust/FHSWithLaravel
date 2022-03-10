@extends('admin.layout')


@section('title')

<title>Show Opinions</title>

@endsection


@section('content')


		 <br>
         <br>	

         <div class="maincontent-head">মতামতের তালিকা</div>

        <table id="table-style">
            <thead>
              
              <th>SN</th>
              <th>Name</th>
              <th>Mobile No.</th>
              <th>Email</th>
              <th>Address</th>
              <th>Comments</th>

            </thead>

            <tbody>
                @foreach($list as $key => $item)
                <tr>
                <td>{{++$key}}</td>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->mobile_no }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->comments }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        
            
         <br>
         <br>


@endsection