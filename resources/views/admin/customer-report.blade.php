<!DOCTYPE html>
<html>
<head>
<style>
#header{
  border: solid 1px black;
  margin-bottom:3px;
  
}
#header h1{
  text-align:center;
}
#layout {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#layout td, #layout th {
    border: 1px solid #ddd;
    padding: 8px;
}

#layout tr:nth-child(even){background-color: #f2f2f2;}

#layout tr:hover {background-color: #ddd;}

#layout th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #373434;
    color: white;
}
</style>
</head>
<body>
<div id="header">
  <h1>BOOKING/ORDER DETAILS FOR : {{$customer}}</h1>
</div>
 <table  id="layout">
        <thead>
        <tr>
            <th>#</th>
            <th>SERVICE TYPE</th>
            <th>SERVICE</th>
            <th>PRICE</th>
            <th>No. of days booked</th>
        </tr>
        </thead>
<tbody>
@forelse($reports as $i=>$report)
    <tr>
        <td>{{ $i+1 }}</td>
        <td>{{ $report->category }}</td>
        <td>{{ $report->name }}</td>
        <td>{{ $report->price }} Kshs.</td>
        <td>
@php
$start = \Carbon\Carbon::parse($report->checkin_date);
$end = \Carbon\Carbon::parse($report->checkout_date);
$length = $start->diffInDays($end);
@endphp
            {{ $length }} Days</td>
        
        
    </tr>
    @empty
     <p>No Data Found</p>
  @endforelse
    </tbody>
</table>

</body>
</html>
