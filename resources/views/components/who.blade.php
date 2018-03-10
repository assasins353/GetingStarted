@if (Auth::guard('web')->check())
<p class="text-success">
you are logged in as <Strong> User </Strong>
</p>
@else 

<p class="text-danger">
you are logged out as <Strong> User </Strong>
</p>

@endif

@if (Auth::guard('admin')->check())
<p class="text-success">
you are logged in as <Strong> Admin </Strong>
</p>
@else 

<p class="text-danger">
you are logged out as <Strong> Admin </Strong>
</p>

@endif