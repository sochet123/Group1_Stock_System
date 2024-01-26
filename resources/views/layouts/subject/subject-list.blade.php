@extends('layouts.master')
@section('title','Subject')
@section('subject','active')
@section('content')
<div class="content-title">
    <h3>Subject</h3>
    <div>
        <a href="{{url('subject/add')}}" class="btn btn-outline-primary"> <span data-feather="user-plus"></span> Add</a>
    </div>
    
</div>

<div class="table-responsive">
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th>#</th>
      <th>Code</th>
      <th>Name</th>
      <th>Note</th>
      <th>Active</th>
      <th width="140px"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>#123</td>
      <td>Math</td>
      <td>2024-21-1</td>
      <td>0123456789</td>
      <td>Math</td>
      <td class="btn-action"> 
        <a href="#"><span class="text-warning" data-feather="edit"></span>Edit</a>
        <a href="#"><span class="text-danger" data-feather="trash-2"></span>Delete</a> 
    </td>
    </tr>
    
  </tbody>
</table>
</div> 
@endsection