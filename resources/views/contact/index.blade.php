@extends('contact.layout')
@extends('home')
@section('table')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>
<body>
    

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contact</h2>
            </div>
        </div>
    </div>

    @if ($contacts->count() > 0)
    <div class = "table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $contact->first_name }}</td>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->message }}</td>
            <td>
            <a href="{{ route('contact.show', $contact->id) }}" title="View Contacts"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                    <!-- <a class="btn btn-primary" href="{{ route('contact.edit',$contact->id) }}">Edit</a> -->
                   <!-- Delete Button -->
                   <button type="button" class="btn btn-danger" id="deleteButton" data-toggle="modal" data-target="#deleteModal">Delete</button>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete?
      </div>
      <div class="modal-footer">
        <!-- Cancel Button -->
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <!-- Delete Button (inside the form) -->
        <form id="deleteForm" action="{{route('contact.destroy', $contact->id)}}" method="POST">
          @csrf <!-- CSRF Token -->
          @method('DELETE') <!-- HTTP Method Spoofing -->
          <button type="submit" id="confirmDelete" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
    $('#confirmDelete').click(function(){
        // Send AJAX request to delete the contact
        $.ajax({
            url: $('#deleteForm').attr('action'),
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                
                console.log("Contact deleted successfully.");
                window.location.reload(); 
            },
            error: function(xhr, textStatus, errorThrown){
                // Handle error response, maybe show an error message
                console.error("Error deleting contact:", errorThrown);
            }
        });
    });
});
</script>

            </td>
        </tr>
        @endforeach
    </table>
    </div>
    @else
    <div class="row">
        <div class="col-lg-12">
            <p class="text-center">No Message Record found!</p>
        </div>
    </div>
    @endif
</div>

</body>
</html>
@endsection