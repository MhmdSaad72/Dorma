<div class="form-group {{ $errors->has('question') ? 'has-error' : ''}}">
    <label for="question" class="control-label">{{ '*Question' }}</label>
    <input class="form-control" name="question" type="text" id="question" value="{{ isset($question->question) ? $question->question : old('question')}}" >

    {!! $errors->first('question', '<p class="help-block text-danger">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('answer') ? 'has-error' : ''}}">
    <label for="answer" class="control-label">{{ '*Answer' }}</label>
    <textarea class="form-control" rows="5" name="answer" type="textarea" id="answer" >{{ isset($question->answer) ? $question->answer : old('answer')}}</textarea>

    {!! $errors->first('answer', '<p class="help-block text-danger">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
