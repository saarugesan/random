@section('content')
    <form method="POST" action="{{ route('forms.store') }}" class="form-horizontal">
        @csrf
        <fieldset>

            <!-- Form Name -->
            <legend>Permohonan Telekomunikasi</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Tajuk Permohonan</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="placeholder"
                        class="form-control input-md">
                    <span class="help-block">help</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Text Input</label>
                <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="placeholder"
                        class="form-control input-md">
                    <span class="help-block">help</span>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit
            </button>

        </fieldset>
    </form>
@endsection
