<!-- Tag Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tag_name', 'Tag Name:') !!}
    {!! Form::text('tag_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.tags.index') !!}" class="btn btn-default">Cancel</a>
</div>
