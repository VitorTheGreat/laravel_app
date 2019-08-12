<input type="text" placeholder="Customer Name" name="name" id="name" value="{{ old('name') ?? $customer->name}}">
<input type="text" placeholder="Customer E-mail" name="email" id="email" value="{{ old('email') ?? $customer->email}}">
<select name="active" id="active">
        <option value="" disabled selected>Select Customer Status</option>

        {{-- Like this we are hardcoding values, so it is not that good --}}
        {{-- <option value="1" {{$customer->active == 'Active' ? 'selected' : ''}}>Active</option> --}}
                {{-- <option value="0" {{$customer->active == 'Inactive' ? 'selected' : ''}}>Inactive</option> --}}

        {{-- Now it is dynamic and our view isn't showing hardcode values --}}
        @foreach ($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{$activeOptionKey}}" {{$customer->active == $activeOptionValue ? 'selected' : ''}}>{{$activeOptionValue}}</option>
        @endforeach
</select>

<select name="company_id" id="company_id">
    <option value="" disabled selected>Select Customer's Company</option>
    @foreach ($companies as $company)
        <option value="{{ $company->id }}" {{$company->id == $customer->company_id ? 'selected' : ''}}>{{ $company->name }}</option>
    @endforeach
</select>

<!-- For security laravel only allows to pass data throug our form if we pass '@csrf', so laravel knows that you are really you passing data and not someone else -->
@csrf
