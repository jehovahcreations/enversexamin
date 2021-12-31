@extends('layouts.app', ['class' => 'dashboard'])

@section('content')
<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <table class="table-auto">
        <thead>
          <tr>
            <th>#</th>
            <th>Date</th>
            <th>Visitors</th>
            <th>Page Title</th>
            <th>Page Views</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
          @foreach ($analyticsData as $data)
          <tr>
            <td>{{ ++$no }}</td>
            <td>{{ $data['date'] }}</td>
            <td>{{ $data['visitors'] }}</td>
            <td>{{ $data['pageTitle'] }}</td>
            <td>{{ $data['pageViews'] }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
