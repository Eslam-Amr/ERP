<!-- Modal -->
<div class="modal fade" id="editRole{{ $employee->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard.give_role')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.update', ['admin' => $employee]) }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    {{-- <label for="exampleInputPassword1">{{trans('Dashboard/sections_trans.name_sections')}}</label> --}}
                    <input type="hidden" name="id" value="{{ $employee->id }}">
                    {{-- <input type="text" name="name" value="{{ $employee->name }}" class="form-control"> --}}
                    <div class="form-group col-12">
                        <div class="row">
                            @if (count($roles) > 0)
                                @foreach ($roles as $role)
                                    {{-- <div class="col-md-6">
                                        <div class="form-check form-check-primary mt-1">
                                            <input class="form-check-input" type="checkbox"
                                                name="rolesArray[{{ $role->name }}]"
                                                id="formCheckcolor{{ $role->id }}" @checked($employee->hasRole($role->name))>
                                            <label class="form-check-label"
                                                for="formCheckcolor{{ $role->id }}">{{ $role->name }}</label>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-6">
                                        <div class="form-check form-check-primary mt-1">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   name="rolesArray[]"
                                                   value="{{ $role->name }}"
                                                   id="formCheckcolor{{ $role->id }}"
                                                   @checked($employee->hasRole($role->name))>
                                            <label class="form-check-label" for="formCheckcolor{{ $role->id }}">
                                                {{ $role->name }}
                                            </label>
                                        </div>
                                    </div>

                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard.submit')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
