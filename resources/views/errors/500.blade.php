<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Oops, Something Went Wrong, Please Try Again Later. (500 - Internal Server Error)</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button><a href="{{ url('/input') }}">Go Back to the homepage</a></button>
            </div>
            <div class="col">
                <button><a href="{{ url()->previous() }}">Go Back to the previous page</a></button>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">    
                <label>Try Searching for your page here:</label>
                <input placeholder="Search..."></input>
                <button>Go</button>
            </div>
            <div class="col-md-2">
            </div>
        </div>
</div>
