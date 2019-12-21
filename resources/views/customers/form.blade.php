<label for="name">Name</label>
<div class="form-group">
    <input type="text" name="name" value="{{old('name')}}" class="form-control">
</div>

<label for="email">Email</label>
<div class="form-group">
    <input type="email" name="email" value="{{old('email')}}" class="form-control">
</div>

<div class="form-group">
    <label for="active">Status</label>
    <select name="active" id="active" class="form-control">
        <option value="" disabled>Select customer status</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
</div>

<div class="form-group">
    <label for="company_id">Company</label>
    <select name="company_id" id="company_id" class="form-control">
        @foreach ($companies as $company)
            <option value="{{ $company-> id}}"> {{$company->name}}</option>
        @endforeach
    </select>
</div>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style = "color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif
@csrf
