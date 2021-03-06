@if (session('success'))
<div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>×</span>
        </button>
        <b>
            {{session('success')}}
        </b>
    </div>
    </div>
@endif

@if (session('delete'))
<div class="alert alert-danger alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>×</span>
        </button>
        <b>
            {{session('delete')}}
        </b>
    </div>
    </div>
@endif