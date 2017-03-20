<form action="{{ route( $methodDestroy, $value) }}" method="post" class="form-horizontal">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </div>
</form>
