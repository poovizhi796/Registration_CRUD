<h3 class="text-color:green; nav justify-content-center">Sairam Institute and Development Center</h3>
<div class="header">
    <nav class="navbar navbar-dark  bg-primary  justify-content-between mt-2 border border-warning rounded">
        <a class="navbar-brand text-white" href="{{ route('registration.index') }}">Enquiry</a>
        <a class="navbar-brand text-white" href="followup">Follow Ups</a>
        <a class="navbar-brand text-white" href="regular">Regular Classes</a>
        <a class="navbar-brand text-white" href="completed">Completed</a>
        <a class="navbar-brand text-white" href="ajaxcrud">Ajax Crud</a>
        <a class="navbar-brand text-white" href="/">Test</a>
        <!---2options
        course completed
        follow up compltd (not joined students)--->
    </nav>
</div>
<div class="row">
    <div class="offset-md-2 col-md-8">
        <a href="{{ route('registration.create')  }}" class="btn btn-md btn-outline-warning float-right mt-2">Create</a>
        <a href="{{ route('registration.index')  }}" class="btn btn-md btn-outline-secondary float-right m-2">List</a>
        <a href="{{ route('registration.index') }}" class="btn btn-md btn-outline-danger float-right m-2">Back</a>
    </div>
</div>
