<!-- Modal -->
<div class="modal fade" id="edit{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard.edit_role')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('role.update', ['role' => $role]) }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">{{trans('Dashboard.role_name')}}</label>
                    <input type="hidden" name="id" value="{{ $role->id }}">
                    <input type="text" name="name" value="{{ $role->name }}" class="form-control">
                    <div class="form-group col-12">
                        <div class="row">
                            @if (count($groups) > 0)
                                @foreach ($groups as $permission)
                                    <div class="col-md-6">
                                        <div class="form-check form-check-primary mt-1">
                                            <input class="form-check-input" type="checkbox"
                                                name="permissionArray[{{ $permission->name }}]"
                                                id="formCheckcolor{{ $permission->id }}" @checked($role->hasPermissionTo($permission->name))>
                                                @if (app()->getLocale() == 'en')

                                            <label class="form-check-label"
                                                for="formCheckcolor{{ $permission->id }}">{{ $permission->name }}</label>
                                                @else
                                                <label class="mx-3 form-check-label"
                                                    for="formCheckcolor{{ $permission->id }}">{{ $permission->name }}</label>
@endif
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
