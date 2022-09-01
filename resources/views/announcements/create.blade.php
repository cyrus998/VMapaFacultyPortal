<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Announcement Form </title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
 
<div class="container mt-2">
   
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Add Announcement</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('announcements.index') }}"> Back</a>
        </div>
    </div>
</div>
    
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
    
<form action="{{ route('announcements.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
   
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Announcement Date:</strong>
                <input type="text" name="date" class="form-control" placeholder="Announcement Date">
               @error('date')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Announcement Title:</strong>
                 <input type="text" name="title" class="form-control" placeholder="Announcement Title">
                @error('title')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Announcement Description:</strong>
                 <input type="text" name="description" class="form-control" placeholder="Announcement Description">
                @error('description')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Photo URL:</strong>
                 <input type="text" name="photourl" class="form-control" placeholder="Enter Photo URL">
                @error('photourl')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary ml-3">Submit</button>
</form>
 
</body>
</html>